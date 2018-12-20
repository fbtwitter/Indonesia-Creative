<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class announcement extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_ANNUNCEMENT';
    protected $fillable = ['ID_ANNOUNCEMENT','ID_cOURSE', 'TANGGAL', 'DESKRIPSI'];
}
