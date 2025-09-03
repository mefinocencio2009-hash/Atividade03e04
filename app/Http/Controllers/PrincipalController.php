<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function bakery(){
        return view('bakery');
    }
    public function sobrenos(){
        return view('sobrenos');

    }

    public function contato(){
        return view('contato');
    }
}
