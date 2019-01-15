<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;
use DB;

class HistoryController extends Controller
{
    public function index(Request $req){
        $query = DB::table("history")->join("users","users.id","=","history.user_id")->select("users.name as autor","history.*")->orderBy("history.created_at","Dsc")->get();
        return response()->json($query,200);
    }
}
