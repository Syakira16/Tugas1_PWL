<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i=0; $i<10; $i++) {
            DB::table('dosen')->insert([
                'nidn' => rand(0111111111,9999999999),
                'nama' => $faker->name(),
                'created_at' => now(),
                'updated_at' => now()
            ]); 
        }
    }
}
