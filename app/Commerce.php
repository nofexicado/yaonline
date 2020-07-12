<?php

namespace App;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;




class Commerce extends Model
{
    
    public function category_departament(){
        return $this->belongsTo(Category_departament::class);
    }

    /*
    *funcion Scope para hacer la consulta de los commercios a travez de un input
    *@inputs(Commerce)
    *@outputs(Commerce,procesado)
  */
    public function scopeCommerce($query,$Commerce){
        
        if($Commerce!='null')
        
        return $query->where('name', 'LIKE', "%$Commerce%");
    }

    
    /*
    *funcion Scope para hacer la consulta de las categorias a travez de Select
    *@inputs(category)
    *@outputs(category,procesado)
  */
    public function scopeCategory($query,$category){
        
        if(!empty($category)){

        $categories = Category_departament::where('category_id', $category )->pluck('id'); 
        $categories= collect($categories);
        $categories->toArray();
               
                return $query->whereIn('category_departament_id',$categories);
        }
            
    }

     /*
    *funcion Scope para hacer la consulta de departamento a travez de Select
    *@inputs(departament)
    *@outputs(departament,procesado)
  */
    public function scopeDepartament($query, $departament){
 
       if(!empty($departament)){
        $departaments = Category_departament::where('departament_id', $departament )->pluck('id'); 
            
        $departaments= collect($departaments);
        $departaments->toArray();
               
                return $query->whereIn('category_departament_id',$departaments);
            }        
            
    }

    
}







