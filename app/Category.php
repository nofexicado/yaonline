<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function departaments(){

        return $this->belongsToMany(Departament::class);
    }

    public function commerces(){
        return $this->hasMany(Commerce::class);
    }

}
