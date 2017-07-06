<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myth extends Model
{
    protected $fillable=['name','history','place','description','community','image'];
}
