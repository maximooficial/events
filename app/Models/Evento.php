<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $table = 'eventos';

    public $timestamps = false;
    protected $fillable = ['evento_nome' , 'evento_id', 'link', 'user_id' ,'local', 'descricao',
    'imagem_1','imagem_2', 'imagem_3' ,'video' ,'rua' ,'bairro' ,'cidade' ,'estado' ,'complemento',
    'assunto' ,'categoria' ,'status' ,'valor' ,'ingressos_qt' ,'ingressos' ,'cupom_id' ,'hora_inicio',
    'hora_final', 'data_inicio' ,'data_final' ,'user_id' ,'eventos_id'] ;     

    protected $dates = [
        'created_at',
    ];

   

  

}
