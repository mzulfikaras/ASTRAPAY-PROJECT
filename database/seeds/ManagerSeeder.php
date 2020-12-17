<?php

use App\Manager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $managers = [
            ['id' => 1, 'name' => 'Manager 1', 'email' => 'manager@email.com', 'nip' => '98877', 'departement' => 'PRODUCT ENGINEERING' ,'password' => Hash::make('12345678')],
            ['id' => 2, 'name' => 'Manager 2', 'email' => 'manager2@email.com', 'nip' => '98777', 'departement' => 'PRODUCT OPERATIONS' ,'password' => Hash::make('manager2')],
            ['id' => 3, 'name' => 'Manager 3', 'email' => 'manager3@email.com', 'nip' => '97777', 'departement' => 'SYSTEM OPERATION' ,'password' => Hash::make('manager3')],
        ];
        
        
        foreach ($managers as $manager) {
            Manager::updateOrCreate(['id' => $manager['id']], $manager);
        }
    }
}
