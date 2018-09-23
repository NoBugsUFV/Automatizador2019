<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Funcionalidade;

class FuncionalidadesController extends Controller
{
    public function index(){
        return view("pages.funcionalidades",["funcionalidades" => Funcionalidade::All()]);
    }
}
