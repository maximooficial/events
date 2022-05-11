<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Settings;
use Illuminate\Support\Facades\Schema;

use App\Models\Parceiro;
use App\Models\MenuTwo;
use App\Models\MenuOne;
use App\Models\Slide;
use App\Models\Post;
use App\Models\Categoria;


class EventosControler extends Controller
{

// mostrando eventos 
public function index() {
  
$parceiros =Parceiro::all();
$eventos =Evento::all();
$MenuTwo =MenuTwo::all();
$MenuOne =MenuOne::all();
$slides =Slide::all();
$post =Post::all();
$categoria =Categoria::all();


return view('eventos',
['eventos' =>$eventos,
'parceiros' =>$parceiros,
'MenuTwo' =>$MenuTwo,
'MenuOne' =>$MenuOne,
'slides' =>$slides,
'posts' =>$post,
'categorias' =>$categoria,


]);  
}

//criando eventos 
public function novo() {

    $eventos =Eventos::all();
    
    return view('eventos',
    ['eventos' =>$eventos,
    
    
    ]);  
    }



    public function painel()
    {
        return view('admin.painel');
    }

  }

