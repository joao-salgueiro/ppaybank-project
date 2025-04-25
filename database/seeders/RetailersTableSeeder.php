<?php

namespace Database\Seeders;

use App\Models\Retailers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RetailersTableSeeder extends Seeder
{

    public function run()
    {
        Retailers::create([
            'id' => (string) Str::uuid(),
            'name' => 'Retailer',
            'document_id' => '1234562278900',
            'email' => 'retailer@exemplo.com',
            'password' => bcrypt('admin123'),
        ]);
    }
}
