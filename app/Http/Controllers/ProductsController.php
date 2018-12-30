<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use PDF;

class ProductController extends Controller
{
    public function index(){
        return view("pages.pesw.funcionalidades",["funcionalidades" => Product::All()]);
    }
    public function getAll(Request $req){
        return response()->json(Product::All());
    }
}
