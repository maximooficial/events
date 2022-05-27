<?php
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
//->where('post_id', Auth::user()->id) // onde 
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
    //$usuario = Post::with('user')->get('post_id');
    //->join('amigos', 'users.id', '=', 'amigos.user_id')
    //->join('eventos', 'amigos.amigo_id', '=', 'eventos.user_id')
    //->select('users.id', 'amigos.user_id', 'posts.post_id')

    ///  $now = new DateTime();
     //   $now = $mensagens;
    // $data_inicio = DB::table('posts')
   //  ->where('created_at', '>=',  carbon::today() ->subDays(2),)
    
   //  ->get();
   //  $data_teste = Carbon::now( );
     //$data_final =  $data_inicio  + $data_teste;
       // $data_inicio = Post::whereDate('created_at', Carbon::now()->format('y/m/d'))->get()
       

       //->where('created_at', '>=', Carbon::today())

     //->orderByRaw('RAND()')->take(3)->get();

     
 // dd($data_inicio); 

 //obtendo valores das vendas 
        //$valor = Venda::orderBy('id', 'DESC')
       // ->select('id', 'valor')
     //   ->where('carteira_id' , $id )
     //   ->sum('valor');
        //dd($valor);

        // nome pequeno 
//$name = Auth::user()->name; 
//$name =  Str::limit($name, 7);
//dd($name);

// 'name' => $name,


 //$post = Post::orderBy('id', 'DESC')
          //  ->where('post_id', $id )
         //->get();
        //$post->loadCount('count');
        // $count = count($post);
        //dd($post);

}