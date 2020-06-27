<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use function GuzzleHttp\Promise\each;

class Departament extends Model
{
    public function categories(){

        return $this->belongsToMany(Category::class);
    }

    public function commerces(){
        return $this->hasManyThrough(Commerce::class , Category::class);
    }



   

    
    
}
