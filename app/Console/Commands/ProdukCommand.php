<?php

namespace App\Console\Commands;

use App\Models\Produk;
use Illuminate\Console\Command;

class ProdukCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'produk:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menampilkan Seluruh Produk';

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
        $mask = "|%4s |%-20s |%-20s |%20s |\n";
        echo PHP_EOL;
        echo 'PRODUK LIST SERUPUT KOPI' . PHP_EOL;
        echo '+-----+---------------------+---------------------+---------------------+' . PHP_EOL;
        printf($mask,'Code', 'Nama', 'Daerah', 'Harga Jual');
        echo '+-----+---------------------+---------------------+---------------------+' . PHP_EOL;
        foreach (Produk::all() as $item) {
            printf($mask, $item->code, $item->nama, $item->daerah->nama, substr(number_format($item->harga_jual, 2, ',', '.'),0,-3));
        }
        echo '+-----+---------------------+---------------------+---------------------+';
    }
}
