<?php

namespace App;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;


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
        
       if($category !='null'){
    
        $cate = DB::table('category_departament')->where('category_id', $category )->pluck('id'); 
            
        $item = array();

                foreach($cate as $cat){
                    $item[] = $cat;
                }
               
                return $query->whereIn('category_departament_id',$item);
            }
               
    }


    public function scopeDepartament($query, $departament){

        if($departament !='null')
        
        $depa = DB::table('category_departament')->where('departament_id', $departament )->pluck('id'); 
            
        $item = array();

                foreach($depa as $dep){
                    $item[] = $dep;
                }
               
                return $query->whereIn('category_departament_id',$item);
    
    }

}





