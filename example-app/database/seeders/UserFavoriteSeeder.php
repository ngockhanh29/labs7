<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserFavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('user_favorite')->insert([
            'user_id' => 1,
            'favorite_id' => 1
        ]);

        DB::table('user_favorite')->insert([
            'user_id' => 1,
            'favorite_id' => 2
        ]);
    }
}
