<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         for($i=0;$i<50;$i++) {
            $mhs = DB::table('mahasiswa')->inRandomOrder()->first()->npm;
            $matkul = DB::table('matakuliah')->inRandomOrder()->first()->kode_matakuliah;
            DB::table('krs')->insert([
                'npm' => $mhs,
                'kode_matakuliah' => $matkul,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
