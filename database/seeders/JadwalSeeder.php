<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      for ($i = 0; $i < 10; $i++) { 

        DB::table('jadwal')->insert([ 
            'kode_matakuliah' => DB::table('matakuliah')->inRandomOrder()->value('kode_matakuliah'), 
            'nidn' => DB::table('dosen')->inRandomOrder()->value('nidn'), 
            'kelas' => ['A','B','C'][rand(0,2)], 
            'hari' => ['Senin','Selasa','Rabu','Kamis','Jumat'][rand(0,4)], 
            'jam' => now(), 
            'created_at' => sekarang(), 
            'updated_at' => sekarang() 
        ]); 

    }
    }
}
