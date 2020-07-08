<?php

namespace App;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category_departament extends Model
{
    public function commerces (){
        return $this->hasMany(Commerce::class);
    }  
}
