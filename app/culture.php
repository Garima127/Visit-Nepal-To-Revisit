<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class culture extends Model
{
    protected $fillable=['name','history','community','description','place','image'];
}
