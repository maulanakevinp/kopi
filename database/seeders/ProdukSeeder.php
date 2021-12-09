<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Produk::truncate();
        DB::statement("INSERT INTO `produk` (`code`, `nama`, `daerah_id`, `harga_jual`) VALUES
            ('FR1', 'Frappucino',   '1', 40000),
            ('CL1', 'Cafe Latte',   '1', 30000),
            ('BC1', 'Black Coffee', '1', 20000),
            ('KL1', 'Kopi Luwak',   '1', 50000),
            ('FR2', 'Frappucino',   '2', 50000),
            ('CL2', 'Cafe Latte',   '2', 40000),
            ('BC2', 'Black Coffee', '2', 30000),
            ('KL2', 'Kopi Luwak',   '2', 80000),
            ('FR3', 'Frappucino',   '3', 30000),
            ('CL3', 'Cafe Latte',   '3', 20000),
            ('BC3', 'Black Coffee', '3', 10000),
            ('KL3', 'Kopi Luwak',   '3', 40000),
            ('FR4', 'Frappucino',   '4', 40000),
            ('CL4', 'Cafe Latte',   '4', 20000),
            ('BC4', 'Black Coffee', '4', 10000),
            ('KL4', 'Kopi Luwak',   '4', 60000);
        ");
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
