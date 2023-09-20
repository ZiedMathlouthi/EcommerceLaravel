<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category ;

class CategoryController extends Controller
{
  public function AddCategory(){

    //traitement d'ajout

   $c = new Category();
   $c->name = "sport";
   $c->description = "description de sport";

   $c->save();


    return 'category ajouter avec succes' ;
  }
}
