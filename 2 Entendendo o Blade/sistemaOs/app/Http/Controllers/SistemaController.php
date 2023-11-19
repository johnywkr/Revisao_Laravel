<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function welcome (){
        $nome = "johne";
        return view('sistemas.welcome',['nome'=>$nome]);
    }

    public function sobre(){
        return view('sistemas.sobre');
    }

    public function servicos(){
        return view('sistemas.servicos');
    }
}
