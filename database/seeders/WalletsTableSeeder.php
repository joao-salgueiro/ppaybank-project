<?php

namespace Database\Seeders;

use App\Models\Wallets;
use App\Models\Users;
use App\Models\Retailers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;



class WalletsTableSeeder extends Seeder
{
   
    public function run()
    {
        $users = Users::all();

        foreach ($users as $user) {
            Wallets::create([
                'user_id' => $user->id,
                'balance' => 1000.00,
            ]);
        }

        $retailers = Retailers::all();

        foreach ($retailers as $retailer) {
            Wallets::create([
                'retailer_id' => $retailer->id,
                'balance' => 300.00,
            ]);
        }

    }
}