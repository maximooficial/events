<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Venda;
use App\Models\Post;

use App\Models\Evento;

use Auth;

use App\Models\Settings;
use Illuminate\Support\Facades\Schema;


class PainelController extends Controller
{

  public function painel1()
    {
        $users = User::get();
        $post = Evento::get();
        $user = Auth::user();

        $teste = $user->post;
        //dd($post);

        return view('painel.teste', array(
            'teste' => $teste,
        ));
        
    }

    public function teste()
    {
         //$vendas = Post::orderBy('id', 'DESC')
          //  ->where('id', Auth::user()->id)
          //  ->get();
       // $vendas->loadCount('count');
       // $count = count($vendas);

        //obtendo valores das vendas 
        $valor = Venda::orderBy('id', 'DESC')
       // ->select('id', 'valor')
        ->where('carteira_id' , Auth::user()->id)
        ->sum('valor');
        //dd($valor);



// quantidade de eventos

$eventos = Evento::orderBy('id', 'DESC' )  // ordenar por 
->where('user_id', Auth::user()->id) // onde 
->get();          //buscar     
$eventos = $eventos->count('id');
//dd($valor);
       

return view('painel.teste', array(
            'eventos' => $eventos,
            //'vendas' => $vendas,
            //'count' => $count,
            'valor' => $valor,

            
        ));
    }

    public function painel()
    {
         //$vendas = Post::orderBy('id', 'DESC')
          //  ->where('id', Auth::user()->id)
          //  ->get();
       // $vendas->loadCount('count');
       // $count = count($vendas);

        //obtendo valores das vendas 
        $valor = Venda::orderBy('id', 'DESC')
       // ->select('id', 'valor')
        ->where('carteira_id' , Auth::user()->id)
        ->sum('valor');
        //dd($valor);



// quantidade de eventos

$eventos = Evento::orderBy('id', 'DESC' )  // ordenar por 
->where('user_id', Auth::user()->id) // onde 
->get();          //buscar     
$eventos = $eventos->count('id');
//dd($valor);
       

return view('painel.index', array(
            'eventos' => $eventos,
            //'vendas' => $vendas,
            //'count' => $count,
            'valor' => $valor,

            
        ));
    }
    

 }


 