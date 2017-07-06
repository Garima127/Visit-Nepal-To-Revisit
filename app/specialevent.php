<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class specialevent extends Model
{
    protected $fillable=['name','location','time','days','image','entry','description'];
}
