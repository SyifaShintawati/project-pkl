<?php

use Illuminate\Database\Seeder;

class pendaftaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
        	['nama'=>'Syifa Shintawati', 'jurusan'=>'Rekayasa Perangkat Lunak', 'asal_sekolah'=>'SMPN 2 Dayeuhkolot', 'alamat'=>'Desa Sayati', 'tanggal_lahir'=>'2001-09-23'],
        	['nama'=>'Alfina Septrianti', 'jurusan'=>'Rekayasa Perangkat Lunak', 'asal_sekolah'=>'SMPN 2 Dayeuhkolot', 'alamat'=>'Desa Sukamenak', 'tanggal_lahir'=>'2002-09-17'],
        ];

        // masukkin data ke database
		DB::table('pendaftaran')->insert($siswa);
    }
}
