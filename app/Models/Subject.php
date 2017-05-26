<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subject extends Model
{
    protected $table = 'subjects';

    public function teachers()
    {
        return $this->belongsToMany('App\Models\Teachers');
    }
}
