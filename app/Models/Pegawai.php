<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $guarded = [];
    protected $tabel = 'pegawais';

    function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}


