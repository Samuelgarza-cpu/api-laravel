<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class oficiosController extends Controller
{
    public function pdf(){
        $pdf = Pdf::loadView('oficio');
        return $pdf->stream();
      
    }
}
