<?php

namespace Database\Seeders;

use App\Models\Spot;
use App\Models\User;
use App\Models\Society;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        Spot::factory(10)->create();

        Society::create([
            'id_card_number' => '33111',
            'password' => bcrypt(1234),
            'name' => 'Kevin Irawan D',
            'born_date' => '2003-10-15',
            'gender' => 'male',
            'address' => 'Makamhaji Kartasura'
        ]);
    }
}
