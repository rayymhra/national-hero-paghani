<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PahlawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pahlawans')->insert([
            [
                'nama_pahlawan' => 'Ir. Soekarno',
                'daerah' => 'Jawa Timur',
                'jasa' => 'Proklamator kemerdekaan Indonesia dan Presiden pertama Republik Indonesia.',
                'gambar' => 'soekarno.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pahlawan' => 'Drs. Mohammad Hatta',
                'daerah' => 'Sumatera Barat',
                'jasa' => 'Wakil Presiden pertama Indonesia dan tokoh penting dalam perjuangan kemerdekaan.',
                'gambar' => 'hatta.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pahlawan' => 'R.A. Kartini',
                'daerah' => 'Jawa Tengah',
                'jasa' => 'Pelopor emansipasi wanita Indonesia dan pejuang hak pendidikan bagi perempuan.',
                'gambar' => 'kartini.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pahlawan' => 'Jenderal Sudirman',
                'daerah' => 'Jawa Tengah',
                'jasa' => 'Panglima Besar TNI pertama yang memimpin perang gerilya melawan Belanda.',
                'gambar' => 'sudirman.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pahlawan' => 'Cut Nyak Dien',
                'daerah' => 'Aceh',
                'jasa' => 'Pahlawan wanita yang memimpin perlawanan terhadap penjajah Belanda di Aceh.',
                'gambar' => 'cutnyakdien.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
