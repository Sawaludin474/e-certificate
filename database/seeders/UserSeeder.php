<?php

namespace Database\Seeders;

use App\Models\Peserta;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'      => 'Admin',
            'email'     => 'admin123@gmail.com',
            'password'  => bcrypt('password')
        ]);

        $no1 = str_pad(rand(1, 9999999), 7, '0', STR_PAD_LEFT);
        
        Peserta::create([
            'sertif_id' => 1,
            'no_sertif' => $no1,
            'nama' => 'Lorem',
            'tema_pelatihan' => 'Php',
        ]);
    }
}
