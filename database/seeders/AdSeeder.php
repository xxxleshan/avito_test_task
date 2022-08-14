<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 150; $i++) {
            DB::table('advertisements')->insert([
                'name' => Str::random(10),
                'price' => rand(1, 300),
                'photo_link' => 'https://' . Str::random(10) . '.fisting',
                'description' => Str::random(100),
                'created_at' => date('Y-m-d H:i:s', $created_at = rand(strtotime('2021-01-01'), time())),
                'updated_at' => date('Y-m-d H:i:s', rand($created_at, time()))
            ]);
        }
    }
}
