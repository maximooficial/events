<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
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
use DateTime;


use App\Models\Settings;
use Illuminate\Support\Facades\Schema;


class PainelController extends Controller
{


public function painel(Request $request){


  $user = Auth::user();
  $id = Auth::id();
 //dd($usuario);
 $mensagens = DB::table('amigos')
   ->where('amigos.user_id', '=', Auth::id())  // indentifica seu id de sessão
   ->join('users', 'amigos.amigo_id', '=', 'users.id') // seleciona os amigos 
   ->join('posts', 'amigos.amigo_id', '=', 'posts.post_id') // identifica o amigo que opostou 
   ->where( 'posts.created_at', '>=',  carbon::today() ->subDays(2),) // filtra a data das postagem 
   ->get();
  //dd($mensagens); 

     $notificacaoeventos = DB::table('amigos')
      ->where('amigos.user_id', '=', Auth::id())
      ->join('users', 'amigos.amigo_id', '=', 'users.id')
      ->join('eventos', 'amigos.amigo_id', '=', 'eventos.user_id')
      ->where( 'eventos.created_at', '>=',  carbon::today() ->subDays(2),) // filtra a data das postagem 
      ->get();
      //dd($notificacaoeventos); 

      // contador de notificações 
$mensagenscount = $mensagens->count('id') + $notificacaoeventos->count('id');

//dd($mensagenscount); 

$postGeral = DB::table('posts')
       ->leftJoin('users', 'users.id', '=', 'posts.post_id')
       ->get();
     //  dd($postGeral);

    $post = Post::orderBy('id', 'DESC')
    ->get();
   //dd($post);

   //obtendo valores das vendas 
   $valor = Venda::orderBy('id', 'DESC')
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
  'mensagens' => $mensagens,
              'mensagenscount' => $mensagenscount,
              'notificacaoeventos' => $notificacaoeventos,

));
}

public function eventos() {
  
  $user = Auth::user();
  $id = Auth::id();
 //dd($usuario);
 $mensagens = DB::table('amigos')
   ->where('amigos.user_id', '=', Auth::id())  // indentifica seu id de sessão
   ->join('users', 'amigos.amigo_id', '=', 'users.id') // seleciona os amigos 
   ->join('posts', 'amigos.amigo_id', '=', 'posts.post_id') // identifica o amigo que opostou 
   ->where( 'posts.created_at', '>=',  carbon::today() ->subDays(2),) // filtra a data das postagem 
   ->get();
  //dd($mensagens); 

     $notificacaoeventos = DB::table('amigos')
      ->where('amigos.user_id', '=', Auth::id())
      ->join('users', 'amigos.amigo_id', '=', 'users.id')
      ->join('eventos', 'amigos.amigo_id', '=', 'eventos.user_id')
      ->where( 'eventos.created_at', '>=',  carbon::today() ->subDays(2),) // filtra a data das postagem 
      ->get();
      //dd($notificacaoeventos); 

     //dd($usuario);
     $grupos = DB::table('grupos')
       ->where('grupos.user_id', '=', Auth::id())  // indentifica seu id de sessão
       ->get();
      
      // dd($mensagens); 


      // quantidade de eventos


//dd($eventos);
      // contador de notificações 
$mensagenscount = $mensagens->count('id') + $notificacaoeventos->count('id');

//dd($mensagenscount); 

return view('painel.novoevento', array(
  'mensagens' => $mensagens,
  'mensagenscount' => $mensagenscount,
  'notificacaoeventos' => $notificacaoeventos,
  'grupos' => $grupos,

));
}
  
public function store(Request $request){
  $compartilhamentos = 20;
  $event = new Evento;
  $event->evento_nome = $request->evento_nome;
  $event->eventos_id = $request->eventos_id;
  $event->link = $request->link;
  $event->local = $request->local;
  $event->descricao = $request->descricao;
  $event->imagem_2 = $request->imagem_2;
  $event->imagem_3 = $request->imagem_3;
  $event->video = $request->video;
  $event->rua = $request->rua;
  $event->bairro = $request->bairro;
  $event->cidade = $request->cidade;
  $event->estado = $request->uf;
  $event->complemento = $request->complemento;
  $event->assunto = $request->assunto;
  $event->categoria = $request->categoria;
  $event->assunto = $request->complemento;
  $event->valor = $request->valor;
  $event->ingressos_qt = $request->ingressos_qt;
  $event->cupom_id = $request->cupom_id;
  $event->hora_inicio = $request->hora_inicio;
  $event->hora_final = $request->hora_final;
  $event->data_inicio = $request->data_inicio;
  $event->data_final = $request->data_final;
  
  $usuario = Auth::user()->id; 
  $event->user_id = $user_id = Auth::user()->id; 
//dd($event); 

 // Image Upload
 if($request->hasFile('imagem_1') && $request->file('imagem_1')->isValid()) {

  $requestImage = $request->imagem_1;

  $extension = $requestImage->extension();

  $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

  $requestImage->move(public_path('perfil' . "/" .$usuario .'/eventos'), $imageName);

  $event->imagem_1 = $imageName;

}
  
$event->save();
return redirect('home');
  }
  
  
 }


 