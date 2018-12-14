<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info_user extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_INFO_USER';
    protected $fillable = ['ID_INFO_USER','ID_FORUM', 'ID_DAFTAR_MASTER', 'EMAIL', 'NAMA_DEPAN', 'NAMA_BELAKANG', 'GENDER', 'DOMISILI', 'FOTO_PROFIL', 'NOMOR_TELP', 'SKILL', 'INTRODUCTION'];
}
