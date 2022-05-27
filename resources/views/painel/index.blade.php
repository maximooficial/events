@extends('layouts.painel')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> {{ __('Painel') }} </h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">{{ __('total de eventos') }} 
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> {{$countEventos}}  
</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: {{$countEventos}}%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300 fa-beat-fade" style="--fa-beat-fade-opacity: 0.67"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            {{ __('meus amigos') }}</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $amigos }} </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa fa-users fa-2x text-gray-300 fa-beat"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                             {{ __('Vendas') }}</div>                   

                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ __('moeda') }} {{ $valor }} </div> 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300 fa-flip" style="--fa-animation-duration: 3s;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                     

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Meus ingressos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$compras}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-ticket  fa-2x text-gray-300 fa-beat-fade" style="--fa-beat-fade-opacity: 0.67"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">{{__('Ultimos Eventos')}}</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Mais Informações:</div>
                                            <a class="dropdown-item" href="#">Clima Tempo</a>
                                            <a class="dropdown-item" href="https://www.otempo.pt/" traget=_black>O Tempo</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- carousel  -->
                                <div class="card-body">
                                    <div class="chart-area ">
             <div id="carouselExampleSlidesOnly" class="carousel slide h-50 " data-ride="carousel">
  <div class="carousel-inner">
  @foreach($eventos->slice(0, 1) as $evento)
    <div class="carousel-item active">
    <img class="d-block w-100" height="310"  src="images/{{$evento->imagem_1}}" alt="{{$evento->nome}}">
     <div class="carousel-caption d-none d-md-block ">
     <header class="entry-header ">
     <a href="/{{$evento->link}}">
   <h3 class="entry-title w-100 p-3 " > <span class="badge badge-warning">{{$evento->evento_nome}}</span></a>
                              <br>   {{$evento->local}}                   </h3>
                            <span class="badge badge-dark">{{$evento->data_inicio}} </span>
                        </header></a>
      </div>
    </div>  
    @endforeach

    @foreach($eventos->slice(1) as $evento)
    <div class="carousel-item">
      <img class="d-block w-100" height="310"  src="images/{{$evento->imagem_1}}" alt="{{$evento->nome}}">
      <div class="carousel-caption d-none d-md-block ">
      <header class="entry-header ">
      <a href="/{{$evento->link}}">
  <h3 class="entry-title w-100 p-3" > <span class="badge badge-warning">{{$evento->evento_nome}}</span></a>
                              <br>   {{$evento->local}} </h3>
                            <span class="badge badge-dark">{{$evento->data_inicio}} </span>
                        </header></a>

      </div>
    </div>   
     @endforeach
  </div>
</div>
</div>
                        </div>
                      </div> 
                        </div>
 <!-- Card Body -->
                                             
                        
 
                    <!-- Pie Chart Clima Tempo -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - menu clima tempo -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">{{config('appSettings.ClimaTitulo')}}</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">{{config('appSettings.ClimaTitulomenu')}}:</div>
                                            <a class="dropdown-item" target="_blank" href="{{config('appSettings.ClimaLink1')}}">{{config('appSettings.Clima1')}}</a>
                                            <a class="dropdown-item" target="_blank" href="{{config('appSettings.ClimaLink2')}}">{{config('appSettings.Clima2')}}</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" target="_blank" href="{{config('appSettings.ClimaLink3')}}">{{config('appSettings.Clima3')}}</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Clima tempo -->
                                <div class="card-body mx-auto " >
                                <iframe  src="{{config('appSettings.climaiframe')}}" frameborder="0" scrolling="no" width="100%" height="312" allowTransparency="true" ></iframe>
</div>                          </div>

                                </div>
                            </div>
                       

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">{{config('appSettings.moedastitulo')}}</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold"> {{$titulomoedas}} <span
                                            class="float-right">{{$moedas}}</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{$moedas}}%"
                                            aria-valuenow="{{$moedas}}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">{{$titulocompartilhamentos}} <span
                                            class="float-right">{{$compartilhamentos}}</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{$compartilhamentos}}%"
                                            aria-valuenow="{{$compartilhamentos}}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">{{$titulomoedasusadas}} <span
                                            class="float-right">{{$moedasusadas}}</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: {{$moedasusadas}}%"
                                            aria-valuenow="{{$moedasusadas}}" aria-valuemin="0" aria-valuemax="200"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">{{$titulocompartilhamentosUsados}} <span
                                            class="float-right">{{$compartilhamentosUsados}}</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{$compartilhamentosUsados}}%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                           

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Galeria de Fotos</h6>
                                </div>
                                <div class="card-body">
             <div id="carouselExampleSlidesOnly" class="carousel slide h-50 " data-ride="carousel">
  <div class="carousel-inner">
  @foreach($eventos->slice(0, 1) as $evento)
    <div class="carousel-item active">
    <img class="d-block w-100" height="310"  src="images/{{$evento->imagem_1}}" alt="{{$evento->nome}}">
     <div class="carousel-caption d-none d-md-block ">
     <header class="entry-header ">
            <h3 class="entry-title w-100 p-3 " > <span class="badge badge-warning">{{$evento->name}}</span>
                              <br>   {{$evento->local}}                   </h3>
                            <span class="badge badge-dark">{{$evento->data_inicio}} </span>
                        </header></a>

      </div>
    </div>  
    @endforeach

    @foreach($eventos->slice(1) as $evento)
    <div class="carousel-item">
      <img class="d-block w-100" height="310"  src="images/{{$evento->imagem_1}}" alt="{{$evento->nome}}">
      <div class="carousel-caption d-none d-md-block ">
      <header class="entry-header ">
            <h3 class="entry-title w-100 p-3" > <span class="badge badge-warning">{{$evento->name}}</span>
                              <br>   {{$evento->local}} </h3>
                            <span class="badge badge-dark">{{$evento->data_inicio}} </span>
                        </header></a>

           </div>
          </div>   
     @endforeach
       </div>
     </div> 
   </div>
 </div>
</div>
</div>

<!-- Publicações -->
<div class="card shadow mb-2 mx-auto" width="728">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Publicações</h6> </div>
    <div class="container mx-auto" >
<div id="news-slider" class="owl-carousel py-5 mx-auto" >    @foreach($postGeral as $post)
<div class="post-slide pl-sm col-sm my-auto  "  width="315" >
<a href="{{$post->link}}" class="read">
<div class="post-img " width="310" >
<img src="images/{{$post->imagem_1}}" alt="">
<span class="icons">
<img src="img/perfil/{{$post->avatar}}" alt="">
</span>
</div>
<div class="post-review">
<ul class="post-bar">
<li><i class="fa fa-calendar"></i>{{ $post->created_at}}
</li><br>
<li><i class="fa fa-user"></i> </li>{{$post->name}}
</ul>
<h3 class="post-title">{{$post->nome}}</h3>
<p class="post-description">{{$post->descricao}} </p>
<a href="{{$post->link}}" class="read">Leia Mais<i class="fa fa-angle-right"></i></a>
</div>
</div>
@endforeach
</a>
            </div>
        </div>
    </div>
</div>                                   <!-- Fim das Publicações -->

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                   <h5> {{config('appSettings.rodape')}}<i class="fa fa-heart-o" aria-hidden="true"></i> </h5>

                   <a href="https://msolucoes.org" target="_blank"> <span>{{config('appSettings.copyright')}} </a>&copy;<script>document.write(new Date().getFullYear());</script> </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
                    </div>


                    
    @endsection

  