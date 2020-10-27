<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'ADMIN 1',
            'email' => 'admin@email.com',
            'nip' => '98899',
            'password' => Hash::make('admin1'),
        ]);
    }
}
