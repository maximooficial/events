@extends('layouts.template')
@section('Title','Events Sua Paginas de Eventos')
@section('content')

        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="#"><img src="images/{{config('appSettings.logo')}}" alt="logo"></a>
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-7 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            @foreach($MenuOne as $menus)

                            <li><a href="{{$menus->link}} ">{{$menus->menu}}</a></li>
                            @endforeach
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">   
                        <a class="btn gradient-bg" href="#">Minha Conta </a>
                    </div><!-- .buy-tickets -->  

                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            @foreach($slides as $slide)

            <div class="swiper-slide" data-date="{{$slide->data}}" style="background: url('images/{{$slide->imagem}}') no-repeat">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col flex flex-column justify-content-center">
                                <div class="entry-header">
                                    <div class="countdown flex align-items-center">
                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dday"></span>
                                            <label>{{$slide->dia}}</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dhour"></span>
                                            <label>{{$slide->hora}}</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dmin"></span>
                                            <label>{{$slide->minutos}}</label>
                                        </div><!-- .countdown-holder -->

                                        <div class="countdown-holder flex align-items-baseline">
                                            <span class="dsec"></span>
                                            <label>{{$slide->segundo}}</label>
                                        </div><!-- .countdown-holder -->
                                    </div><!-- .countdown -->

                                    <h2 class="entry-title">{{$slide->titulo}}
                                </div><!--- .entry-header -->
                                <h4 ass="text-light bg-dark">{{$slide->descricao}} </h4>

                                <div class="entry-footer">
                                    <a class="btn gradient-bg" href="{{$slide->link}}">{{$slide->botao}}</a>
                                </div><!-- .entry-footer" -->
                            </div><!-- .col -->
                        </div><!-- .container -->
                    </div><!-- .hero-content -->
                </div><!-- .swiper-slide -->
            </div><!-- .swiper-wrapper -->
@endforeach
           
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .swiper-container -->
</header><!-- .site-header -->

<div class="homepage-info-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-5">
                <figure>
                    <img src="images/{{config('appSettings.PaginaImg')}} " alt="logo">
                </figure>
            </div>

            <div class="col-12 col-md-8 col-lg-7">
                <header class="entry-header">
                    <h2 class="entry-title">{{config('appSettings.PaginaTitulo')}} </h2>
                </header>

                <div class="entry-content">
                    <p>{{config('appSettings.PaginaDescricao')}} </p>
                </div>

                <footer class="entry-footer">
                    <a href="{{config('appSettings.Pagina_link1')}} " class="btn gradient-bg">{{config('appSettings.PaginaBt1')}}</a>
                    <a href="{{config('appSettings.Pagina_link2')}} " class="btn dark">{{config('appSettings.PaginaBt2')}}</a>
                </footer>
            </div>
        </div>
    </div>
</div>

<div class="homepage-featured-events">
    <div class="container">
        <div class="row">                    

            <div class="col-12">
                <div class="featured-events-wrap flex flex-wrap justify-content-between">
                    @php 
                    $i = 1; 
                    @endphp
                    @foreach($eventos->slice(0, 3) as $evento)

                    <div class="event-content-wrap positioning-event-{{ $i++}}">

                        <figure>
                            <a href="/{{$evento->link}} "><img src="images/{{$evento->imagem_1}}" alt="1">
                        </figure>

                        <header class="entry-header ">
                            <h3 class="entry-title w-100 p-3" > <span class="badge badge-warning">{{$evento->name}}</span>
                                <br>  {{$evento->local}} 
                               

                            </h3>
                            <div class="posted-date"> {{$evento->data_inicio}} </div>

                        </header></a>
                    </div>
                    @endforeach

                    <div class="event-content-wrap positioning-event-4 half">
                        <figure>
                            <a href="#"><img src="images/events-in-london.jpg" alt=""></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-5 half">
                        <figure>
                            <a href="#"><img src="images/check-july.png" alt=""></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-6 half">
                        <figure>
                            <a href="#"><img src="images/summer-festivals.jpg" alt=""></a>
                        </figure>
                    </div>
                     @php 
                    $i = 7; 
                    @endphp
                    @foreach($eventos->slice(3, 3) as $evento)
                    <div class="event-content-wrap positioning-event-{{ $i++}}">

                        <figure>
                            <a href="/{{$evento->link}} "><img src="images/{{$evento->imagem_1}}" alt="1">
                        </figure>

                        <header class="entry-header ">
                            <h3 class="entry-title w-100 p-3" > <span class="badge badge-primary">{{$evento->name}}</span>
                                <br>  {{$evento->local}} 
                               

                            </h3>
                            <div class="posted-date"> {{$evento->data_inicio}} </div>

                        </header></a>

                    </div>
                    @endforeach

                   
                    @foreach($categorias as $categoria)

                    
                    <div class="event-content-wrap positioning-event-10 half">
                        <figure>
                            <a href="{{$categoria->link}}"><img src="images/{{$categoria->imagem}}" alt=""></a>
                        </figure>
                    </div>

                    <div class="event-content-wrap positioning-event-11 half">
                        <figure>
                            <a href="#"><img src="images/autumn.jpg" alt=""></a>
                        </figure>
                    </div>                        @endforeach


                </div>
            </div>
        </div>
    </div>
</div>

<div class="homepage-next-events">
    <div class="container">
        <div class="row">
            <div class="next-events-section-header">
                <h2 class="entry-title">{{config('appSettings.TituloPgPostagem')}}</h2>


                <p>{{config('appSettings.DescricaoPgPostagem')}}</p>
            </div>
        </div>

        <div class="row">                  @foreach($posts->slice(0, 3) as $post)

            <div class="col-12 col-sm-6 col-md-4">
                <div class="next-event-wrap">
                    <figure>
                        <a href=" {{$post->link}}"><img src="images/{{$post->imagem_1}}" alt="1"></a>               


                        <div class="event-rating"> {{$post->contador}}</div>
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">{{$post->nome}}</h3> 


                        <div class="posted-date"> {{$post->created_at->format('l d  F ')}} às <span> {{$post->created_at->format('H:i:s' )}} </span>
                            </div>
                    </header>

                    <div class="entry-content">
                        <p>   {{$post->descricao}} </p>
                    </div>

                    <footer class="entry-footer">
                        <a href=" {{$post->link}}"> {{$post->botao}}</a>
                    </footer>
                </div>
            </div>
@endforeach
          
                </div>
            </div>
        </div>
    </div>
</div>

<div class="homepage-regional-events">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="regional-events-heading entry-header flex flex-wrap justify-content-between align-items-center">
                    <h3 class="entry-title">{{config('appSettings.TituloPgCategoria')}}</h3>

                    <div class="select-location">

                        <select onchange="location.href=this.value">  
                            @foreach($categorias as $categoria)

                            <option value="{{$categoria->link}}" >{{$categoria->nome}}</option>
                            
                            @endforeach
                        </select>                        
                    </div>
                </header>

                <div class="swiper-container homepage-regional-events-slider">
                    <div class="swiper-wrapper">
                        @foreach($eventos->slice(3) as $evento)


                        <div class="swiper-slide">
                            <figure>
                                <img src="images/{{$evento->imagem_2}}" alt="">

                                <a class="event-overlay-link flex justify-content-center align-items-center" href="{{$evento->link}}">+</a>
                            </figure><!-- .hero-image -->

                            <div class="entry-header">
                                <h2 class="entry-title">{{$evento->name}}</h2>
                            </div><!--- .entry-header -->

                            <div class="entry-footer">
                                <div class="posted-date"><span>{{$evento->data_inicio}}</span></div>
                            </div><!-- .entry-footer" -->
                        </div><!-- .swiper-slide -->
@endforeach
                        
                    </div><!-- .swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .swiper-container -->

                <div class="events-partners">
                    <header class="entry-header">
                        <h2 class="entry-title">Parceiros</h2>
                    </header>

                    <div class="events-partners-logos flex flex-wrap justify-content-between align-items-center">
                        @foreach($parceiros as $parceiros)

                        <div class="footer-social">

                            
                            
                        <div class="event-partner-logo">
                            <a href="http://{{$parceiros->link}}" target="blank_"><img src="images/{{$parceiros->imagem_1}}" alt=""></a>
                        </div>
                    </div>                         
                       @endforeach

                </div>
            </div>

            </div>
        </div>
    </div>
</div>

<div class="newsletter-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h2 class="entry-title">{{config('appSettings.TituloPgEmail')}}</h2>
                    <p>{{config('appSettings.DescricaoPgEmail')}}</p>
                </header>

                <div class="newsletter-form">
                    <form class="flex flex-wrap justify-content-center align-items-center">
                        <div class="col-md-12 col-lg-3">
                            <input type="text" placeholder="Nome">
                        </div>

                        <div class="col-md-12 col-lg-6">
                            <input type="email" placeholder="Seu e-mail">
                        </div>

                        <div class="col-md-12 col-lg-3">
                            <input class="btn gradient-bg" type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><img src="images/logo.png" alt="logo"></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        @foreach($MenuTwo as $menus)

                        <li><a href="{{$menus->link}} ">{{$menus->menu}}</a></li>
                        @endforeach

                    </ul>
                </nav>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      {{config('appSettings.copyright')}} &copy;<script>document.write(new Date().getFullYear());</script> {{config('appSettings.rodape')}}<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="http://{{config('appSettings.class_link_1')}}"><i class="{{config('appSettings.class_1')}}"></i></a></li>
                        <li><a href="http://{{config('appSettings.class_link_2')}}"><i class="{{config('appSettings.class_2')}}"></i></a></li>
                        <li><a href="http://{{config('appSettings.class_link_3')}}"><i class="{{config('appSettings.class_3')}}"></i></a></li>
                        <li><a href="http://{{config('appSettings.class_link_4')}}"><i class="{{config('appSettings.class_4')}}"></i></a></li>
                        <li><a href="http://{{config('appSettings.class_link_5')}}"><i class="{{config('appSettings.class_5')}}"></i></a></li>
                        <li><a href="http://{{config('appSettings.class_link_6')}}"><i class="{{config('appSettings.class_6')}}"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="back-to-top flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>

@endsection
