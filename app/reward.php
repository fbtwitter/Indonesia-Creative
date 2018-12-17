<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reward extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'ID_REWARD';
    protected $fillable = ['ID_REWARD', 'ID_PESERTAMONTHLY', 'ID_DAFTAR_MASTER', 'NILAI'];
}
