<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_COURSE';
    protected $fillable = ['ID_COURSE','NAMA_COURSE', 'DEFINISI_COURSE'];
}
