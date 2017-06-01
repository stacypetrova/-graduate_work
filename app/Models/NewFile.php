<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NewFile extends Model
{
    protected $table = 'newfiles';


    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }
    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }
    public function kurs()
    {
        return $this->belongsTo('App\Models\Kurs');
    }
    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }
}
