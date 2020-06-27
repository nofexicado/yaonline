<?php

namespace App;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Commerce extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function departament(){
        return $this->hasOneThrough(Departament::class, Category::class);
    }


    
    public function scopeCommerce($query,$Commerce){
        
        if($Commerce!='null')
        
        return $query->where('name', 'LIKE', "%$Commerce%");
    }

    public function scopeCategory($query,$category){
        
        if($category!='null')

        return $query->where('category_id', 'LIKE', "%$category%");
    }

    

    public function scopeDepartament($query, $departament){
        $dep_cat_commerces=[]; 

        foreach(Departament::find($departament)->categories as $dep_cat) {
            $dep_cat_commerces = $dep_cat->commerces;
        }
        return $dep_cat_commerces;

        foreach($dep_cat_commerces as $id){
            $id->id;
        }
        return $query->where('id', 'LIKE', "%$id%");
    }

    
}





