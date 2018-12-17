<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forum extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ID_FORUM';
    protected $fillable = ['ID_FORUM', 'ID_INFO_USER', 'DATE_TIME', 'ISI_FORUM'];
}
