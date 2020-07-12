<?php

namespace App\Http\Controllers;
use App\Commerce;
use App\Category;
use App\Departament;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class LandingPage extends Controller
{
  /*
    *funcion para mostrar informacion basada en filtros
    *@inputs(commerceInput, categoryInput, departamentInput)
    *@outputs(categories, departaments, comercio)
  */
    public function index(Request $request){
      
        #Select queryData      
        $categories = Category::all();
        $departaments = Departament::all();
        #Request viewData
        $commerceInput = $request->get('commerce');
        $categoryInput = $request->get('category');
        $departamentInput = $request->get('departament');
        #Query Result
        $comercio = Commerce::orderBy('id','ASC')
        ->commerce($commerceInput)
        ->category($categoryInput)
        ->departament($departamentInput)
        ->paginate(10);
        
      return view('home',compact('categories', 'departaments', 'comercio'));
    }
  
}