<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class biyo extends Model
{
    protected $table = 'bio';
    protected $fillalble = ['nama', 'tempat', 'tanggal_lahir', 'Hobby', 'foto', 'file'];
    protected $primaryKey = 'id';
}
