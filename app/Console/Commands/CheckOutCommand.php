<?php

namespace App\Console\Commands;

use App\Models\Produk;
use Illuminate\Console\Command;

class CheckOutCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'checkout {produk* : Masukkan 1 atau lebih kode produk}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Out Seruput Kopi';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $mask = "|%4s |%-20s |%20s |%20s |%20s |\n";
        $harga_total = 0;
        $diskon_total = 0;
        echo PHP_EOL. 'Checkout Seruput Kopi'. PHP_EOL;
        echo '+-----+---------------------+---------------------+---------------------+---------------------+' . PHP_EOL;
        printf($mask,'Qty', 'Nama', 'Jumlah Harga', 'Diskon', 'Jumlah');
        echo '+-----+---------------------+---------------------+---------------------+---------------------+' . PHP_EOL;
        foreach (array_count_values($this->argument('produk')) as $key => $item) {
            $diskon = 0;
            $harga = 0;
            $produk = Produk::where('code',$key)->first();
            if ($produk) {
                if ($produk->daerah_id == 4) {
                    if ($produk->nama == 'Cafe Latte') {
                        $diskon += $produk->harga_jual;
                    }
                }
                for ($i=1; $i <= $item; $i++) {
                    $harga += $produk->harga_jual;
                    if ($produk->daerah_id == 2) {
                        if ($i >= 4) {
                            $diskon += (20/100) * $produk->harga_jual;
                        }
                    }
                };
                $diskon_total += $diskon;
                $harga_total += $harga;
                printf($mask,$item, $produk->nama, substr(number_format($harga, 2, ',', '.'),0,-3), substr(number_format($diskon, 2, ',', '.'),0,-3), substr(number_format($harga - $diskon, 2, ',', '.'),0,-3));
            } else {
                echo 'Produk '. $key . ' Tidak ditemukan' . PHP_EOL;
            }
        }

        echo '+-----+---------------------+---------------------+---------------------+---------------------+' . PHP_EOL;
        printf("|%70s |%20s |\n", 'Total', substr(number_format($harga_total - $diskon_total, 2, ',', '.'),0,-3));
        echo '+-----------------------------------------------------------------------+---------------------+' . PHP_EOL;
    }
}
