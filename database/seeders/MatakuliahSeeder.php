<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matakuliah')->insert([
            [
                'kode_matakuliah' => 'IF1021111',
                'nama_matakuliah' => 'Algoritma Pemrograman Dasar',
                'sks' => rand(2,3),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_matakuliah' => 'IF204004',
                'nama_matakuliah' => 'Struktur Data',
                'sks' => rand(2,3),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_matakuliah' => 'IF306006',
                'nama_matakuliah' => 'Basis Data',
                'sks' => rand(2,3),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_matakuliah' => 'IF305005',
                'nama_matakuliah' => 'Computer Vision',
                'sks' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode_matakuliah' => 'IF505005',
                'nama_matakuliah' => 'Pemrograman Web 2',
                'sks' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
