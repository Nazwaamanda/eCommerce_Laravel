<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Skripsi;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void  

    {
         User::factory(10)->create(); // Cara cepat membuat 10 user secara random

       User::create([ //membuat data dalam tabel
            'name' => 'user1',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456789'),
            'point' => 10000,
        ]);

        Admin::create([
            'name' => 'admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
        ]);

       Skripsi::create([
            'judul'=> 'implementasi web untuk umkm di pulau bengkalis',
            'nama'=> 'Nazwa',
            'nim' => '12345',
            'angkatan' => '22', 
            'dosen_pembimbing_1' => 'Pak Fajri',
            'dosen_pembimbing_2'=> 'Buk Lidya',
        ]); 
    }
}