<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Venda;
use App\Models\Post;
use App\Models\Compras;
use App\Models\Amigos;

use App\Models\Evento;
use Str;
use Auth;
use DB;


use App\Models\Settings;
use Illuminate\Support\Facades\Schema;


class PainelController extends Controller
{

  //public function painel1()
   // {
    //    $users = User::get();
    //    $post = Evento::get();
    //   $user = Auth::user();

       // $teste = $user->post;
        //dd($post);

       // return view('painel.teste', array(
       //    'teste' => $teste,
      //  ));
      //  
   // }

    // public function teste()
    //{
         //$vendas = Post::orderBy('id', 'DESC')
          //  ->where('id', Auth::user()->id)
          //  ->get();
       // $vendas->loadCount('count');
       // $count = count($vendas);

        //obtendo valores das vendas 
     //   $valor = Venda::orderBy('id', 'DESC')
       // ->select('id', 'valor')
       // ->where('carteira_id' , Auth::user()->id)
      //  ->sum('valor');
        //dd($valor);

      
// quantidade de eventos

//$eventos = Evento::orderBy('id', 'DESC' )  // ordenar por 
//->where('user_id', Auth::user()->id) // onde 
//->get();          //buscar     
//$eventos = $eventos->count('id');
//dd($valor);
       

// return view('painel.teste', array(
       //     'eventos' => $eventos,
            //'vendas' => $vendas,
            //'count' => $count,
         //   'valor' => $valor,

            
       // ));
    // }



    public function painel()
    {
        
     $postGeral = DB::table('posts')
            ->leftJoin('users', 'users.id', '=', 'posts.post_id')
            ->get();
          //  dd($postGeral);


       //$usuario = Post::with('user')->get('post_id');
       $user = Auth::user();
       $id = Auth::id();
      //dd($usuario);


         $post = Post::orderBy('id', 'DESC')
          //  ->where('post_id', $id )
            ->get();
        //$post->loadCount('count');
        // $count = count($post);
        //dd($post);

        //obtendo valores das vendas 
        $valor = Venda::orderBy('id', 'DESC')
       // ->select('id', 'valor')
        ->where('carteira_id' , $id )
        ->sum('valor');
        //dd($valor);

// quantidade de eventos

$compras = Compras::orderBy('id', 'DESC' )  // ordenar por 
->where('user_id', $id ) // onde 
->get();          //buscar     
$compras = $compras->count('id');
//dd($valor);

// quantidade de eventos

$amigos = Amigos::orderBy('id', 'DESC' )  // ordenar por 
->where('user_id', $id ) // onde 
->get();          //buscar     
$amigos = $amigos->count('id');
//dd($amigos);

// quantidade de eventos

$eventos = Evento::orderBy('id', 'DESC' )  // ordenar por 
->where('user_id', $id ) // onde 
->get();          //buscar     
$countEventos = count($eventos);

//dd($eventos);
       
// nome pequeno 
//$name = Auth::user()->name; 
//$name =  Str::limit($name, 7);
//dd($name);


// moedas golds 
$moedas = 10;
$compartilhamentos = 20;
$moedasusadas = 52;
$compartilhamentosUsados = 85;
$titulomoedas = "Moedas Adquiridas" ;
$titulocompartilhamentos = "Compartilhamentos Efetuados";
$titulomoedasusadas = "Moedas Usadas";
$titulocompartilhamentosUsados = "Compartilhamentos Trocados por Moedas";
// fim do sistema de moedas 

return view('painel.index', array(
            'eventos' => $eventos,
            'posts' => $post,
            'countEventos' => $countEventos,
            'valor' => $valor,
           // 'name' => $name,
            'compras' => $compras,
            'amigos' => $amigos,
            'moedas' => $moedas,
            'compartilhamentos' => $compartilhamentos,
            'moedasusadas' => $moedasusadas,
            'compartilhamentosUsados' => $compartilhamentosUsados,
            'titulomoedas' => $titulomoedas,
            'titulocompartilhamentos' => $titulocompartilhamentos,
            'titulomoedasusadas' => $titulomoedasusadas,
            'titulocompartilhamentosUsados' => $titulocompartilhamentosUsados,
            'postGeral' => $postGeral,
            'id' => $id,



        ));
    }
    

 }


 