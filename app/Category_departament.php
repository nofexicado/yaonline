<?php

namespace App;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category_departament extends Model
{
    protected $table = 'category_departament';

    public function commerces (){
        return $this->hasMany(Commerce::class);
    } 
    
}