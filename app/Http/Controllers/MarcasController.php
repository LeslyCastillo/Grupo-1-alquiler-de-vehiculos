<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function index(){
        return view("marcas.index");
    }
}
