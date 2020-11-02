<?php

use App\Admin;
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
        $admins = [
            ['id' => 1, 'name' => 'ADMIN 1', 'email' => 'admin@email.com', 'nip' => '98899', 'password' => Hash::make('admin1')],
        ];
        
        foreach ($admins as $admin) {
            Admin::updateOrCreate(['id' => $admin['id']], $admin);
        }
    }
}
