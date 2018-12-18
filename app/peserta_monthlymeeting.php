<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peserta_monthlymeeting extends Model
{
  public $timestamps = false;
  protected $primaryKey = 'ID_PESERTAMONTHLY';
  protected $fillable = ['ID_PESERTAMONTHLY', 'ID_FEEDBACK', 'ID_MONTHLYMEETING', 'ID_REWARD'];
}
