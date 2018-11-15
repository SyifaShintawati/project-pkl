<?php

use Illuminate\Database\Seeder;

class bioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $biyo = [
        	['nama'=>'Syifa Shintawati', 'tempat'=>'Bandung', 'tanggal_lahir'=>'2001-09-23', 'Hobby'=>'Menari', 'foto'=>'default.png', 'file'=>'default.docx'],
        	['nama'=>'Alfina Spetrainti', 'tempat'=>'Bandung', 'tanggal_lahir'=>'2002-09-17', 'Hobby'=>'Makan Temen', 'foto'=>'default.png', 'file'=>'default.docx'],
        ];

        DB::table('bio')->insert($biyo);
    }
}
