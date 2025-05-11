<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = new User();

        $adminUser->name = "Admin";
        $adminUser->email = "admin@localhost";
        $adminUser->password = Hash::make("admin_password");
        $adminUser->email_verified_at = now();

        $adminUser->save();
    }
}
