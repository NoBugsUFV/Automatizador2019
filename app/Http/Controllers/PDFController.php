<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use App\User;
use App\History;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Database\QueryException;

class PDFController extends Controller
{
    public function fromBackup(Request $req, $id){
        $token = $req->input("token");
        try {
            $user = JWTAuth::toUser($token);
            $query = History::where("id",$id)->first();
            $cliente = $query->cliente;
            $visao = $query->visao;
            $funcionalidades = json_decode($query->products);
            $validade = $query->validade;
            $pdf = PDF::loadView("docs.pesw.pdf",compact("funcionalidades","cliente","visao","data","validade"));
            return $pdf->stream("PESw - Site para $cliente.pdf");  
        }
        catch (TokenInvalidException $e) {
            return response()->json("O token fornecido é invaido",400);
        }
        catch( JWTException $e){
            return response()->json("Você precisa estar logado para realizar esta ação",400);
        }
        catch(QueryException $e){
            return response()->json("Não foi possível encontrar o documento no Histórico",400);
        }
    }
    public function pdfPESw(Request $req) {
        $funcionalidades = json_decode($req->input("funcionalidades"));
        $token = $req->input("token");
        try {
            $user = JWTAuth::toUser($token);
            $cliente = $req->input("cliente");
            $visao = $req->input("visao");
            $data = $req->input("data");
            $validade = $req->input("validade");
            $data = json_encode(array("cliente" => $cliente, "visao" => $visao, "data" => $data, "validade" => $validade, "products" => $req->input("funcionalidades")));
            History::create([
                "user_id" => $user->id,
                "data" => $data,
                "type" => "pesw"
            ]);
            $pdf = PDF::loadView("docs.pesw.pdf",compact("funcionalidades","cliente","visao","data","validade"));
            return $pdf->stream("PESw - Site para $cliente.pdf");            
        }
        catch(TokenInvalidException $e) {
            return response()->json("O token fornecido é invaido",400);
        }
        catch(JWTException $e) {
            return response()->json("Você precisa estar logado para realizar esta ação",400);
        }/*
        catch(QueryException $e) {
            return response()->json($e,400);
        }*/
    }
}