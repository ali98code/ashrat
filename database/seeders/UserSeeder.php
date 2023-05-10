<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123123'),
            'role_id' => 1
        ]);

        User::create([
            'first_name' => 'مستخدم',
            'last_name' => 'جديد',
            'username' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('123123123')
        ]);
    }
}
