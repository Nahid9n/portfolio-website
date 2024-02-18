<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id'=>1,
            'first_name' =>'Super',
            'last_name' =>'Admin',
            'email'     =>'admin@gmail.com',
            'password'  =>bcrypt('admin@gmail.com'),
            'gender'    =>'male',
            'date_of_birth'       =>'31-07-1998',
            'address'    =>'dhaka,Bangladesh',
            'phone'    =>'01310993183',
            // 'role'      => 'admin',
            // 'role_id'   => '1',
        ]);
    }
}
