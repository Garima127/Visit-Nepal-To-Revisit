<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resort extends Model
{
    protected $fillable=['name','place','fascilities','contact','email','website','expenses','description','bio','image'];
}
