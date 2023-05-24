<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Speciality;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\City::create([
            'name'         => 'Cairo',
        ]);

        \App\Models\Area::create([
            'name'         => 'Test Account',
            'city_id'      => 1
        ]);

         \App\Models\User::create([
             'name'         => 'Test Account',
             'email'        => 'admintest@gmail.com',
             'phone'        => '01234567895',
             'city_id'      => 1,
             'area_id'      => 1,
             'password'     => '$2y$10$RYRxAxkN.ifPjKVadb9fFOY8orKb/glpvquGZgcscf5ackHyD2pR2',
             'type'         => 'admin'
         ]);

         Speciality::create([
             'name'         => 'Carbenter',
             'img'         => '690background.jpg',
         ]);
    }
}
