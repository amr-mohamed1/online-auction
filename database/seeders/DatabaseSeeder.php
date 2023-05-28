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

         \App\Models\User::create([
             'first_name'           => 'Test Account',
             'last_name'            => 'Test Account',
             'email'                => 'Test Account',
             'password'             => '$2y$10$RYRxAxkN.ifPjKVadb9fFOY8orKb/glpvquGZgcscf5ackHyD2pR2',
             'type'                 => 'admin'
         ]);

    }
}
