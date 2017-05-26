<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Group extends Model
{
    protected $table = 'groups';
    
    public function kurs()
    {
        return $this->belongsTo('App\Models\Kurs');
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Models\Teacher');
    }
}
