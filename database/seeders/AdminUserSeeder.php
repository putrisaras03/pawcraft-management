<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use RuntimeException;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $name = config('app.admin.name');
        $email = config('app.admin.email');
        $password = config('app.admin.password');

        if (!$name || !$email || !$password) {
            throw new RuntimeException(
                'Konfigurasi ADMIN_NAME, ADMIN_EMAIL, dan ADMIN_PASSWORD belum lengkap.'
            );
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => $password,
            ]
        );
    }
}
