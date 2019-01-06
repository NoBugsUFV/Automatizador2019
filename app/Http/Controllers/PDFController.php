<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\JWTException;

class PDFController extends Controller
{
    public function pdf(Request $req) {
        $funcionalidades = json_decode($req->input("funcionalidades"));
        $token = $req->input("token");
        try {
            $user = JWTAuth::toUser($token);
            $cliente = $req->input("cliente");
            $visao = $req->input("visao");
            $pdf = PDF::loadView("docs.pesw.pdf",compact("funcionalidades","cliente","visao"));
            return $pdf->stream("PESw - Site para $cliente.pdf");            
        }
        catch(TokenInvalidException $e) {
            return response()->json("O token fornecido é invaido",400);
        }
        catch(JWTException $e) {
            return response()->json("Você precisa estar logado para realizar esta ação",400);
        }
    }
}
