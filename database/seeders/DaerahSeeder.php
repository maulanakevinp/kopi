<?php

namespace Database\Seeders;

use App\Models\Daerah;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Daerah::truncate();
        Daerah::create(['nama' => 'P. Jawa']);
        Daerah::create(['nama' => 'Bali']);
        Daerah::create(['nama' => 'P. Sumatra']);
        Daerah::create(['nama' => 'P. Kalimantan']);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
