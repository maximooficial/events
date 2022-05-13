hello word

<p> {{ __('Suas Vendas') }} </p>  <h2>{{ $valor }}  </h2> 
                        <!-- exemplos {{-- $count -- }}  {{--  $vendas --}}  -->

<h3>{{ __('Seus Eventos') }} </h3> <h4> {{ $eventos }}</h4> 

<br>

<h3>Ola</h3> <h4>{{auth()->user()->name}}</h4>  

@foreach($post as $pos)

    <div class="carousel-item">
      <img src="images/{{$pos->imagem_1}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>@endforeach

