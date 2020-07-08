<?php

namespace App;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Commerce extends Model
{
    public function category_departament(){
        return $this->belongsTo(Category_departament::class);
    }


    
    public function scopeCommerce($query,$Commerce){
        
        if($Commerce!='null')
        
        return $query->where('name', 'LIKE', "%$Commerce%");
    }

    public function scopeCategory($query,$category){
        
        if($category!='null')

        return $query->where('category_departament_id', 'LIKE', "%$category%");
    }

    

    public function scopeDepartament($query, $departament){

        if($departament){
        $dep_cat_commerces=[]; 

        // foreach(Departament::find($departament)->categories as $dep_cat) {
        //     $dep_cat_commerces = $dep_cat->commerces;
        //     foreach($dep_cat_commerces as $id){
        //       $departament = $id->category_id;
        //   }
        // } 
        
        return $query->where('category_departament_id', 'LIKE', "%$departament%");
    
}
    }
    
}





