<?php

use App\KategoriAkses;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $kategories = [
            ['id' => 1 , 'kategori_akses' => 'EMAIL'],
            ['id' => 2 , 'kategori_akses' => 'INTERNET'],
            ['id' => 3 , 'kategori_akses' => 'INTRANET'],
            ['id' => 4 , 'kategori_akses' => 'SERVER'],
            ['id' => 5 , 'kategori_akses' => 'SISTEM'],
        ];

        foreach($kategories as $kategori){
            KategoriAkses::updateOrCreate(['id' => $kategori['id']], $kategori);
        }
    }
}
