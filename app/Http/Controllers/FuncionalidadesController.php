<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Funcionalidade;
use PDF;

class FuncionalidadesController extends Controller
{
    public function index(){
        return view("pages.pesw.funcionalidades",["funcionalidades" => Funcionalidade::All()]);
    }
}
