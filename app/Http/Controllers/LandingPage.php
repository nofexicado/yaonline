<?php

namespace App\Http\Controllers;
use App\Commerce;
use App\Category;
use App\Departament;
use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function index(Request $request){
      
        //consulto todos los datos de las tablas.
        // $commerces = Commerce::all();
        $categories = Category::all();
        $departaments = Departament::all();
        
        //obtengo datos por GET desde la vista.
        $commerce = $request->get('commerce');
        $category = $request->get('category');
        $departament = $request->get('departament');
        $category_name = 0;
        $departament_name = 0;

        if(!empty($departament)){
          $departament_name = Departament::find($departament)->id; 
          
        }

        if(!empty($category)){
          $category_name = Category::find($category)->id; 
        }

        $commerio = Commerce::orderBy('id','ASC')
        ->commerce($commerce)
        ->category($category)
        ->departament($departament)
        ->paginate(10);
        
        
      // $conts=count($commerio);
     
      
    
      return view('home',compact('categories', 'departaments', 'commerio','category_name','departament_name' ));
    }
  
}