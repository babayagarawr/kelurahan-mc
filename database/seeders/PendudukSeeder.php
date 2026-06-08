<?php

namespace Database\Seeders;

use App\Models\Penduduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penduduk::create([
        'nik' => '3507123456780004',
        'nama' => 'Putri Ku Sayang',
        'jk' => 'P',
        'alamat' => 'Jl. Bromo No. 10, RT 01 RW 01'
        ]);

        Penduduk::create([
        'nik' => '3507123456780001',
        'nama' => 'Budi Santoso',
        'jk' => 'L',
        'alamat' => 'Jl. Merdeka No. 10, RT 01 RW 01'
        ]);

        Penduduk::create([
        'nik' => '3507123456780003',
        'nama' => 'Raja Meksiko',
        'jk' => 'L',
        'alamat' => 'Jl. Satria No. 10, RT 01 RW 01'
        ]);

    }
}
