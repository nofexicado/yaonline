<?php

namespace App;

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

    
}





