<?php

use Illuminate\Database\Seeder;

class bukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = [
        	['judul_buku'=>'Terbang Melayang', 'pengarang'=>'Dede Duni', 'penerbit'=>'Global Media', 'tahun_terbit'=>'2015'],
        	['judul_buku'=>'Serasa di Awan', 'pengarang'=>'Ima Murtiani', 'penerbit'=>'Mars Venus', 'tahun_terbit'=>'2017'],
        	['judul_buku'=>'Melayang-layang', 'pengarang'=>'Bebi Nirwana', 'penerbit'=>'Bumi Buku', 'tahun_terbit'=>'2009']
        ];

        DB::table('perpustakaan')->insert($buku);
    }
}
