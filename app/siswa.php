<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'pendaftaran';
    protected $fillalble = ['nama', 'jurusan', 'asal_sekolah', 'alamat', 'tanggal_lahir'];
    protected $primaryKey = 'id';
}
