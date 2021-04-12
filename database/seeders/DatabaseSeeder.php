<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('alerts')->insert([
            'coin' => 'Alerte 1',
            'symbol' => 'BTC',
            'price' => 60000,
            'movement' => '+'
        ]);

        DB::table('alerts')->insert([
            'coin' => 'Alerte 2',
            'symbol' => 'ETH',
            'price' => 2000,
            'movement' => '-'
        ]);
    }
}
