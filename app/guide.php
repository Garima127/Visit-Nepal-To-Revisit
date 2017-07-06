<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guide extends Model
{
   protected $fillable=['name','language','contact','email','website','experience','address','age','gender','description','bio','image','expenses'];
}
