<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penyakits')->insert([
            [
                'kode' => 'KR01',
                'nama_penyakit' => 'Accu Lemah'
            ],
            [
                'kode' => 'KR02',
                'nama_penyakit' => 'Busi Lemah'
            ],
            [
                'kode' => 'KR03',
                'nama_penyakit' => 'Filter Udara Kotor'
            ],
            [
                'kode' => 'KR04',
                'nama_penyakit' => 'Throttle Body Kotor'
            ],
            [
                'kode' => 'KR05',
                'nama_penyakit' => 'Celah Klep Longgar'
            ],
            [
                'kode' => 'KR06',
                'nama_penyakit' => 'TPS Error'
            ],
            [
                'kode' => 'KR07',
                'nama_penyakit' => 'Injektor Tersumbat'
            ],
            [
                'kode' => 'KR08',
                'nama_penyakit' => 'ECM Mati'
            ],
        ]);
    }
}
