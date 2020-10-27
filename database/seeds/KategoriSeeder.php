<?php

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
        DB::table('kategori_akses')->insert([
            'kategori_akses' => 'EMAIL'
        ]);

        DB::table('kategori_akses')->insert([
            'kategori_akses' => 'INTERNET'
        ]);

        DB::table('kategori_akses')->insert([
            'kategori_akses' => 'INTRANET'
        ]);

        DB::table('kategori_akses')->insert([
            'kategori_akses' => 'SERVER'
        ]);

        DB::table('kategori_akses')->insert([
            'kategori_akses' => 'SISTEM'
        ]);
    }
}
