<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function home(){
        //
        return view('main.home',[]); //En las llaves van los datos que queremos que el ususario resiva en la vista por ejemplo puede ir ["name"=>"arnoldo"]
    }
}
