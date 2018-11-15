<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'perpustakaan';
    protected $fillalble = ['judul_buku', 'pengarang', 'penerbit', 'tahun_terbit'];
    protected $primaryKey = 'id';
}
