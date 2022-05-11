<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parceiro;

class ParceirosControler extends Controller
{
    public function index() {

    $parceiros =Parceiro::all();

    return view('eventos',
    ['eventos' =>$parceiros,
    
    
    ]);  
    }   
}
