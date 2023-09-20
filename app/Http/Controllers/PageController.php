<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function afficherpage1() {
    return view('page1');
}
    public function donnees() {
        $name="Ahmed";
        $age= 20 ;
        $names = ["thabet","amyn","zied"];
    return view('donnees.index')->with('name',$name)->with('age', $age)->with('names', $names);
}
}
