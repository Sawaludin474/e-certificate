<?php

namespace Database\Seeders;

use App\Models\Sertif;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SertifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sertif::create([
            'ceo'               => 'Lorem ipsum',
            'nama_pengajar'     => 'Lorem',
            'instansi_pengajar' => 'Lorem ipsum Company',
            'tempat'            => 'Jakarta',
            'tanggal'           => '2024-02-04',
            'ttd_pimpinan'      => null,
            'ttd_pengajar'      => null,

        ]);
    }
}
