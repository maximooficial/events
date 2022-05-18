@extends('layouts.painel')

@section('content')

</div>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15 ">
                    <i class="fas fa-laugh-wink animate__animated animate__tada animate__infinite animate__slower"></i>
                </div>
                <div class="sidebar-brand-text mx-3 "    style="max-width: 9ch; overflow: hidden; width:6em;  white-space:nowrap;"><sup>Olá  {{auth()->user()->name}} </sup>   </div>


            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>    {{ __('Perfil') }} </span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            
          
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">{{$mensagenscount}}</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
{{__('Ultimas Notificações')}}                                </h6>    @foreach($mensagens as $mensagem)
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="/img/perfil/{{$mensagem->avatar}}"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">{{$mensagem->nome}}.</div>
                                        <div class="small text-gray-500">{{$mensagem->name}}. 58m</div>
                                    </div>
                                </a> @endforeach
                               
                               
                               
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="max-width: 12ch; overflow: hidden; width:7em;  white-space:nowrap;">{{auth()->user()->name}}
</span>

                                <img class="img-profile rounded-circle"
                                    src="/img/perfil/{{auth()->user()->avatar}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Perfil') }} 
 </a>

                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Configuracao') }}

                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Atividades') }}

                                </a>
                                <div class="dropdown-divider"></div>
                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Logout') }}
                            </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="dropdown-item" >
                                @csrf
                            </form>

                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

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

  