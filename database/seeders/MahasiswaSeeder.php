<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker = Faker::create('id_ID');
        
        for($i=0; $i<20; $i++) {
            $dosen = DB::table('dosen')->inRandomOrder()->first()->nidn;
            DB::table('mahasiswa')->insert([
                'npm' => $faker->unique()->numerify('5520123###'),
                'nidn' => $dosen,
                'nama' => $faker->name(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
