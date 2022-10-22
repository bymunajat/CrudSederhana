<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = "pegawai";
    protected $promarykey = "id";
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'tgllhr'
    ];
}
