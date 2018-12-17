<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftar_master extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_DAFTAR_MASTER';
    protected $fillable = ['ID_DAFTAR_MASTER', 'ID_COURSE', 'ID_INFO_USER'];
}
