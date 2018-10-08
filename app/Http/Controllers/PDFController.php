<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PDFController extends Controller
{
    public function pdf(Request $req) {
        $funcionalidades = json_decode($req->input("funcionalidades"));
        $cliente = $req->input("cliente");
        $pdf = PDF::loadView("pages.pesw.pdf",compact("funcionalidades","cliente"));
        return $pdf->stream("PESw - Site para $cliente.pdf");            
    }
}
