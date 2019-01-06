<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PDFController extends Controller
{
    public function pdf(Request $req) {
        $funcionalidades = json_decode($req->input("funcionalidades"));
        $cliente = $req->input("cliente");
        $descricao = $req->input("descricao");
        $pdf = PDF::loadView("docs.pesw.pdf",compact("funcionalidades","cliente","descricao"));
        return $pdf->stream("PESw - Site para $cliente.pdf");            
    }
}
