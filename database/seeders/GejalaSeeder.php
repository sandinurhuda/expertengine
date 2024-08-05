<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gejalas')->insert([
            [
                'kode' => 'G01',
                'nama_gejala' => 'Motor Sulit Dihidupkan'
            ],
            [
                'kode' => 'G02',
                'nama_gejala' => 'Akselerasi Motor Menurun'
            ],
            [
                'kode' => 'G03',
                'nama_gejala' => 'Suara Mesin Ngelitik'
            ],
            [
                'kode' => 'G04',
                'nama_gejala' => 'Mesin Tersendat saat Dipakai'
            ],
            [
                'kode' => 'G05',
                'nama_gejala' => 'Bahan Bakar Boros'
            ],
            [
                'kode' => 'G06',
                'nama_gejala' => 'Mesin Mudah Panas Berlebih'
            ],
            [
                'kode' => 'G07',
                'nama_gejala' => 'Motor Mati Total'
            ],
            [
                'kode' => 'G08',
                'nama_gejala' => 'Suara Mesin Meletup-letup'
            ],
            [
                'kode' => 'G09',
                'nama_gejala' => 'Mesin Melambat Pada saat Berjalan'
            ],
            [
                'kode' => 'G10',
                'nama_gejala' => 'Asap Hitam Keluar dari Lubang Knalpot'
            ],
            [
                'kode' => 'G11',
                'nama_gejala' => 'Kelistrikan Mati'
            ],
            [
                'kode' => 'G12',
                'nama_gejala' => 'Lampu Redup'
            ],
            [
                'kode' => 'G13',
                'nama_gejala' => 'Mesin Sering Mati Mendadak'
            ],
            [
                'kode' => 'G14',
                'nama_gejala' => 'Mesin Tidak Bisa Stationer'
            ],
            [
                'kode' => 'G15',
                'nama_gejala' => 'Gas Tidak Stabil'
            ],
            [
                'kode' => 'G16',
                'nama_gejala' => 'Muncul Kode Kerusakan pada Speedometer'
            ],
            [
                'kode' => 'G17',
                'nama_gejala' => 'Bau Bahan Bakar yang Menyengat'
            ],
            [
                'kode' => 'G18',
                'nama_gejala' => 'Responsivitas Mesin Berkurang'
            ],
            [
                'kode' => 'G19',
                'nama_gejala' => 'Mesin Tidak dapat Mencapai Top Speed'
            ],
            [
                'kode' => 'G20',
                'nama_gejala' => 'Mesin Macet'
            ],
        ]);
    }
}
