<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KerusakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kerusakans')->insert([
            [
                'kode' => 'KR01',
                'nama_kerusakan' => 'Accu Lemah'
            ],
            [
                'kode' => 'KR02',
                'nama_kerusakan' => 'Busi Lemah'
            ],
            [
                'kode' => 'KR03',
                'nama_kerusakan' => 'Filter Udara Kotor'
            ],
            [
                'kode' => 'KR04',
                'nama_kerusakan' => 'Throttle Body Kotor'
            ],
            [
                'kode' => 'KR05',
                'nama_kerusakan' => 'Celah Klep Longgar'
            ],
            [
                'kode' => 'KR06',
                'nama_kerusakan' => 'TPS Error'
            ],
            [
                'kode' => 'KR07',
                'nama_kerusakan' => 'Injektor Tersumbat'
            ],
            [
                'kode' => 'KR08',
                'nama_kerusakan' => 'ECM Mati'
            ],
        ]);
    }
}
