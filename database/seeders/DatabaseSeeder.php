<?php

namespace Database\Seeders;

use Database\Seeders\AdSeeder;
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
        $this->call([
            AdSeeder::class,
        ]);
    }
}
