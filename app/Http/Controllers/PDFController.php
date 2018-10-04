<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PDFController extends Controller
{
    public function pdf(Request $req) {
        $funcionalidades = json_decode($req->input("funcionalidades"));
        $download= true;
        $pdf = PDF::loadView("pages.pesw.pdf",compact("download","funcionalidades"));
        return $pdf->stream("funcionalidades.pdf",array('Attachment'=>0));            
    }
}
