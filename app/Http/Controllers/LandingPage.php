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
        $commerces = Commerce::all();
        $categories = Category::all();
        $departaments = Departament::all();
        

  
        //obtengo datos por GET desde la vista.
        $commerce = $request->get('commerce');
        $category = $request->get('category');
        $departament = $request->get('departament');


        //proceso comercio a travez de departament.
        // $dep_cat_commerces=[]; 

        // foreach(Departament::find(5)->categories as $dep_cat) {
        //     $dep_cat_commerces = $dep_cat->commerces;
        // }
        


        //proceso consultas Scope.
        $commerio = Commerce::orderBy('id','DESC')
        ->commerce($commerce)
        ->category($category)
        ->departament($departament);
        

        //retorno datos a la vista.
      return view('home', [
        'categories' => $categories,
        'departaments' => $departaments,
        'commerio' => $commerio,
        // 'dep_cat_commerces' => $dep_cat_commerces
      ]);

    }
  
}