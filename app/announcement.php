<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class announcement extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_ANNOUNCEMENT';
    protected $fillable = ['ID_ANNOUNCEMENT','ID_COURSE', 'TANGGAL', 'DESKRIPSI'];
}
