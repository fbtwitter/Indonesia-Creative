<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
  public $timestamps = false;
  protected $primaryKey = 'EMAIL';
  protected $fillable = ['EMAIL', 'PASSWORD', 'HAK_AKSES'];
}
