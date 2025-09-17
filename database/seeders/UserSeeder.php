<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'first_name'     => 'Johnna',
                'last_name'      => 'Quevedo',
                'usn'            => '10001',
                'password_hash'  => Hash::make('123123'),
                'email'          => 'johnna@gmail.com',
                'phone_number'   => '09171234567',
                'role'           => 'student',
                'profile_picture'=> null,
                'last_login'     => '2025-09-01 08:30:00',
                'is_active'      => 1,
                'created_at'     => '2025-01-10 09:00:00',
                'updated_at'     => '2025-09-01 08:30:00',
            ],
            [
                'first_name'     => 'Sherlyn',
                'last_name'      => 'Indong',
                'usn'            => '10002',
                'password_hash'  => Hash::make('123123'),
                'email'          => 'sherlyn@gmail.com',
                'phone_number'   => '09181234568',
                'role'           => 'student',
                'profile_picture'=> null,
                'last_login'     => '2025-09-02 09:45:00',
                'is_active'      => 1,
                'created_at'     => '2025-01-12 10:15:00',
                'updated_at'     => '2025-09-02 09:45:00',
            ],
            [
                'first_name'     => 'Ryan',
                'last_name'      => 'Prudenciano',
                'usn'            => '20000',
                'password_hash'  => Hash::make('123123'),
                'email'          => 'ryan@gmail.com',
                'phone_number'   => null,
                'role'           => 'teacher',
                'profile_picture'=> null,
                'last_login'     => '2025-09-05 14:20:00',
                'is_active'      => 1,
                'created_at'     => '2025-01-15 11:00:00',
                'updated_at'     => '2025-09-05 14:20:00',
            ],
            [
                'first_name'     => 'Admin',
                'last_name'      => 'Administrator',
                'usn'            => '30000',
                'password_hash'  => Hash::make('123123'),
                'email'          => 'admin@gmail.com',
                'phone_number'   => '09281234569',
                'role'           => 'admin',
                'profile_picture'=> null,
                'last_login'     => '2025-09-07 17:10:00',
                'is_active'      => 1,
                'created_at'     => '2025-01-20 12:30:00',
                'updated_at'     => '2025-09-07 17:10:00',
            ],
            [
                'first_name'     => 'Alma Fe',
                'last_name'      => 'Pepania',
                'usn'            => '10003',
                'password_hash'  => Hash::make('123123'),
                'email'          => 'pyang@gmail.com',
                'phone_number'   => '09391234560',
                'role'           => 'student',
                'profile_picture'=> null,
                'last_login'     => '2025-09-09 11:55:00',
                'is_active'      => 0,
                'created_at'     => '2025-01-25 14:00:00',
                'updated_at'     => '2025-09-09 11:55:00',
            ],
        ]);
    }
}
