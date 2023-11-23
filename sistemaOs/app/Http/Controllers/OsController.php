<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class osController extends Controller
{
    public function welcome(){
        $nomes = ['johne','victor','gui','kety'];
        return view('sistemas.welcome', ['nomes'=>$nomes]);
    }
}
