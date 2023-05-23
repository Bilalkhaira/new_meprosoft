<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = [
            ['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('admin@gmail.com'), 'type' => 'admin'],
            ['name' => 'Admin', 'email' => 'bilalkhaira8989@gmail.com', 'password' => bcrypt('bilalkhaira8989@gmail.com'), 'type' => 'subAdmin'],
            ['name' => 'Sub Admin', 'email' => 'sales@mesprosoft.com', 'password' => bcrypt('sales@mesprosoft.com'), 'type' => 'subAdmin'],
            ['name' => 'Sub Admin', 'email' => 'info@mesprosoft.com', 'password' => bcrypt('info@mesprosoft.com'), 'type' => 'subAdmin'],
        ];
        User::insert($input);
    }
}
