<?php

namespace Database\Seeders;

use CBSeeder;
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
        $this->call([
            CBSeeder::class,
        ]);
    }
}
