<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_course extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_SUB_COURSE';
    protected $fillable = ['ID_COURSE', 'ID_DAFTAR_MASTER', 'SUB_COURSE', 'DEFINISI_SUB_COURSE'];
}
