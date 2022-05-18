<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensagenController extends Controller
{


    public function painel()
    {


        $postGeral = DB::table('posts')
        ->leftJoin('users', 'users.id', '=', 'posts.post_id')
        ->get();
      //  dd($postGeral);





    }



}
