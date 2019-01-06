<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PDFController extends Controller
{
    public function pdf(Request $req) {
        $funcionalidades = json_decode($req->input("funcionalidades"));
        $cliente = $req->input("cliente");
        $visao = $req->input("visao");
        $pdf = PDF::loadView("docs.pesw.pdf",compact("funcionalidades","cliente","visao"));
        return $pdf->stream("PESw - Site para $cliente.pdf");            
    }
}
