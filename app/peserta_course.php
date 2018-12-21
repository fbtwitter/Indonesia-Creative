<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peserta_course extends Model
{
  public $timestamps = false;
  protected $primaryKey = 'ID_PESERTA_COURSE';
  protected $fillable = ['ID_PESERTA_COURSE', 'ID_COURSE', 'ID_INFO_USER'];
}
