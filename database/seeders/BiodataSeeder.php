<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Biodata; // Jangan lupa panggil model Biodata

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Masukkan data awal sesuai permintaan (Nama, Kelas, Hobi)
        Biodata::create([
            'welcome_message' => 'Halo, Selamat Datang di Website Biodata Saya!',
            'nama' => 'Muhammad Iham',
            'kelas' => 'XI RPL',
            'hobi' => 'Bermain Game, Membaca Buku, Menonton Film, dan Berolahraga',
        ]);
    }
}