<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class heritage extends Model
{
    protected $fillable=['name','location','description','open_hours','things_to_do','climate','best_season','image','bio','gps'];
}

