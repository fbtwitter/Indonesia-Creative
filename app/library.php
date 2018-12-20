<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class library extends Model
{
  public $timestamps = false;
  protected $primaryKey = 'ID_LIBRARY';
  protected $fillable = ['ID_LIBRARY', 'ID_SUB_COURSE', 'SOFTWARE'];
}
