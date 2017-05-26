<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Teacher extends Model
{
    protected $table = 'teachers';

    public function subjects()
    {
        return $this->belongsToMany('App\Models\Subject');
    }
    public function groups()
    {
        return $this->belongsToMany('App\Models\Group');
    }
}
