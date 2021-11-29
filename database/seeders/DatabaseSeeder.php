<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Municipality;
use App\Models\Settlement;
use App\Models\SettlementType;
use App\Models\State;
use App\Models\Zone;
use App\Models\Zipcode;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        City::factory(40)->create();
        Municipality::factory(60)->create();
        SettlementType::factory(24)->create();
        Settlement::factory(80)->create();
        State::factory(32)->create();
        Zone::factory(2)->create();
        Zipcode::factory(100)->create();
    }
}
