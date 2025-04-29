<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{

    public function run()
    {
        Users::create([
            'id' => (string) Str::uuid(),
            'name' => 'Administrador',
            'document_id' => '12345678900',
            'email' => 'admin@exemplo.com',
            'password' => bcrypt('admin123'),
        ]);
    }
}
