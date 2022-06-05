@extends('pages')

@section('metaData')
    
   
    
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.jardepot.com/"/>
    <meta property="og:image" content="{{asset('img/logos/logoOG.jpg')}}"/>
    <meta property="og:image:url" content="{{asset('img/logos/logoOG.jpg')}}"/>
    <meta property="og:image:secure_url" content="{{asset('img/logos/logoOG.jpg')}}"/>
    <link rel="canonical" href="https://www.jardepot.com">

@endsection

@section('specificCSS')
    <style>
    div{
		border-radius: 5px;
	}
	.contenedor{
		width:100%;
		height:100px;
        display:flex;
        margin: 25px;
        justify-content: center;
        
	}
	.contenido{
		height:80px;
		width:100%;
		float:left;
		margin: 10px;
	}
    .contenido img {
        width: 250px;
        height: 250px;
    }

    .squareImg{
        width:450px;
        height:450px;
     object-fit:cover;
    }
    
    .btn-side-cart{
            display: block;
        }
        /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
        .flip-card {
            background-color: transparent;
            perspective: 1000px; /* Remove this if you don't want the 3D effect */
        }

        /* This container is needed to position the front and back side */
        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        /* Do an horizontal flip when you move the mouse over the flip box container */
        .flip-card .fliped-card-inner {
            transform: rotateY(180deg);
        }

        /* Position the front and back side */
        .flip-card-back {
            display: none;
            width: 100%;
            -webkit-backface-visibility: hidden; /* Safari */
            backface-visibility: hidden;
        }

        /* Style the front side (fallback if image is missing) */

        /* Style the back side */
        .flip-card-back {
            background-color: dodgerblue;
            color: white;
            transform: rotateY(180deg);
        }
        .contenedorImg{
    position: relative;
    display: inline-block;
    text-align: center;
    
}
.centrado{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}
/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
* {
  box-sizing: border-box;
}


</style>
<link rel="stylesheet" href="{{asset('assets/css/components/sidebar.min.css')}}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/components/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components/breadcrumb.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pages/product.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components/drift-basic.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pages/cart.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components/slick-theme.css')}}">
    {{--<link rel="stylesheet" href="{{asset('assets/css/components/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components/leaflet-gesture-handling.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/css/pages/spare.css')}}">
    <link rel="canonical" href="{{$canonical}}">
    <script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>

@endsection

@section('content')

    @component('components.breadcrumb')
            @slot('level1', $categoryLevel1)
            @slot('level2', $categoryLevel2)
    @endcomponent
        @php
                $arr = json_decode(json_encode ( $lista ) , true);
                $index = 0;
                $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $datosActuales = explode("/",$link);
                $contenido = count($arr) -1;
                $cont = count($arr) -1;
                $productos = json_decode(json_encode($related), true);
                $productoIndex = 0;
            @endphp


    
    
    <div class="contenedorImg">
        <img class ="d-block w-100"src="http://localhost:8000/img/categories/bann.jpg" />

        <div class="centrado"><h1>{{$datosActuales[3]}}</h1></div>
    </div>
    <br><br><br>


    @switch($contenido)
        @case($contenido == 3)
       
        <div id="cards-section" class="row">
                @foreach($arr as $key => $cat)
                    @if($key < 4)
                        <div class="card shadow-sm product-item col-sm-6 col-md-4 col-lg-3 p-0 mt-2 " style= "padding: 0; line-height:30px;">
                            <div class="justify-content: space-between">
                            <h4>{{$arr[$index]['nombreCategoriaNivel2']}}</h4>

                            </div>
                                <a  href="{{route('products', ['categoryLevel1'=> $datosActuales[3],'categoryLevel2'=> $arr[$index]['nombreCategoriaNivel2'] ])}}" >
                                    <img class="squareImg"  alt="Oferta Jardepot" title="oferta Jardepot" src="http://localhost:8000/img/categories/aspersoras.jpg">
                                </a>
                        </div>
                        @php
                            $index = $index+1;  
                        @endphp
                    @endif
                @endforeach
            </div>
        @break
        @case($contenido <= 6)
        <div class="">
                    <h2>{{$arr[$index]['nombreCategoriaNivel2']}} </h2>
                    <a href="{{route('products', ['categoryLevel1'=> $datosActuales[3],'categoryLevel2'=> $arr[$index]['nombreCategoriaNivel2'] ])}}" >
                        <img class="d-block w-100"  alt="Oferta Jardepot" title="oferta Jardepot" src="http://localhost:8000/img/categories/aspersoras.jpg">
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
        </div>
          

            @php
                $index = $index+1;  
                

            @endphp

            <div id="cards-section" class="row">
                @foreach($arr as $key => $cat)
                    @if($key < 4)
                        <div class="card shadow-sm product-item col-sm-6 col-md-4 col-lg-3 p-0 mt-2 " style= "padding: 0; line-height:30px;">
                            <div class="justify-content: space-between">
                            <h4>{{$arr[$index]['nombreCategoriaNivel2']}}----{{$arr[$index]['prioridad']}}</h4>

                            </div>
                                <a  href="{{route('products', ['categoryLevel1'=> $datosActuales[3],'categoryLevel2'=> $arr[$index]['nombreCategoriaNivel2'] ])}}" >
                                    <img class="squareImg"  alt="Oferta Jardepot" title="oferta Jardepot" src="http://localhost:8000/img/categories/aspersoras.jpg">
                                </a>
                        </div>
                        @php
                            $index = $index+1;  
                        @endphp
                    @endif
                @endforeach
            </div>

             <div class="">
                <h2>{{$arr[$index]['nombreCategoriaNivel2']}}</h2>
                    <a href="{{route('products', ['categoryLevel1'=> $datosActuales[3],'categoryLevel2'=> $arr[$index]['nombreCategoriaNivel2'] ])}}">
                        <img class="d-block w-100"  alt="Oferta Jardepot" title="oferta Jardepot" src="http://localhost:8000/img/categories/motocultores.jpg">
                    </a> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    @php
                        $index = $index+1;  
                    @endphp
            </div>
            <br><br><br>
          

            @php
                $index = $index+1;  
                

            @endphp
        @break
        @case($contenido>7)

        <div class="">
                    <h2>{{$arr[$index]['nombreCategoriaNivel2']}} </h2>
                    <a href="{{route('products', ['categoryLevel1'=> $datosActuales[3],'categoryLevel2'=> $arr[$index]['nombreCategoriaNivel2'] ])}}" >
                        <img class="d-block w-100"  alt="Oferta Jardepot" title="oferta Jardepot" src="http://localhost:8000/img/categories/aspersoras.jpg">
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
        </div>
          

            @php
                $index = $index+1;  
                

            @endphp
            <br><br><br><br><br><br>
            <div id="cards-section" class="row">
                @foreach($arr as $key => $cat)
                    @if($key < 4)
                        <div class="card shadow-sm product-item col-sm-6 col-md-4 col-lg-3 p-0 mt-2 " style= "padding: 0; line-height:30px;">
                            
                            <h4>{{$arr[$index]['nombreCategoriaNivel2']}}</h4>

                            
                                <a  href="{{route('products', ['categoryLevel1'=> $datosActuales[3],'categoryLevel2'=> $arr[$index]['nombreCategoriaNivel2'] ])}}" >
                                    <img class="squareImg"  alt="Oferta Jardepot" title="oferta Jardepot" src="http://localhost:8000/img/categories/aspersoras.jpg">
                                </a>
                        </div>
                        @php
                            $index = $index+1;  
                        @endphp
                    @endif
                @endforeach
            </div>
            <br><br><br><br><br><br>
             <div class="">
                <h2>{{$arr[$index]['nombreCategoriaNivel2']}}</h2>
                    <a href="{{route('products', ['categoryLevel1'=> $datosActuales[3],'categoryLevel2'=> $arr[$index]['nombreCategoriaNivel2'] ])}}">
                        <img class="d-block w-100"  alt="Oferta Jardepot" title="oferta Jardepot" src="http://localhost:8000/img/categories/motocultores.jpg">
                    </a> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    @php
                        $index = $index+1;  
                    @endphp
            </div>
            <br><br><br>
            <div class="align-items-center">
                    <div class="contenedor align-items-center">
                        @foreach($arr as $key => $cat)
                            @if($key < 4)
                                <div class="contenido col-lg-3 col-md-6 align-items-center">
                                    <h4>{{$arr[$index]['nombreCategoriaNivel2']}}</h4>
                                        <a  href="{{route('products', ['categoryLevel1'=> $datosActuales[3],'categoryLevel2'=> $arr[$index]['nombreCategoriaNivel2'] ])}}" >
                                            <img class="squareImg"  alt="Oferta Jardepot" title="oferta Jardepot" src="http://localhost:8000/img/categories/aspersoras.jpg">
                                        </a>
                                </div>
                                @php
                                    $index = $index+1;  
                                    $ind = count($arr)-$index;
                                @endphp
                            @endif
                        @endforeach
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br>


            <h2>Más opciones </h2>
            <div class="container-fluid pt-6">
                <div class="row">
                        @foreach($arr as $key => $cat)
                            @if($key < $ind)
                            <div class="col-lg-2 col-md-6 pb-1">
                                    <a class="d-flex flex-wrap justify-content-center align-items-center" href="{{route('products', ['categoryLevel1'=> $datosActuales[3],'categoryLevel2'=> $arr[$index]['nombreCategoriaNivel2'] ])}}" >
                                        <i class="text-left text-muted" >{{$arr[$index]['nombreCategoriaNivel2']}}</i>
                                    </a>
                                    @php
                                        $index = $index+1;  
                                    @endphp
                            </div>
                            @endif
                        @endforeach 
                </div>
            </div>
            
                                      
        @break

    @endswitch
                        <div class="col-lg-12 col-md-3">
                        @if(count($productos))
                                <div class="row mt-4">
                                    <h5>Productos recomendados</h5>
                                    <div class="divider"></div>
                                    <!-- Swiper -->
                                    <div class="swiper-container p-1">
                                        <div class="swiper-wrapper">
                                            @foreach($productos as $related)
                                                <div class="swiper-slide">
                                                    <div class="card shadow-sm product-item" style="border-radius: 5px;overflow: hidden;">
                                                        <a href="{{url($related['href'])}}">
{{--                                                            @if($related['discount'] == 'Oferta')--}}
{{--                                                                <div class="ribbon ribbon-top-right" style="display: block;position: relative;z-index: 6"><span>Oferta</span></div>--}}
{{--                                                            @endif--}}
                                                            @if($related['discount'] == 'Oferta')
                                                                <img src="{{ asset('assets/images/ofertas/oferta-0.png') }}" style="width: 75px;position: absolute;top: 0;left: 0;z-index: 3" title="Pestaña-Oferta" alt="Pestaña Oferta">
                                                            @endif
                                                            <div class="product-image img-container" style="height: 145px;">
                                                                <img style="max-width: 80%;max-height: 80%"
                                                                     src="{{asset($related['images'][0]['small'])}}"
                                                                     title="{{$related['productType'].'-'.str_replace(" ", "-",$related['brand']).'-'.$related['mpn']}}"
                                                                     alt="{{$related['productType'].' '.$related['brand'].' '.$related['mpn']}}">
                                                            </div>
                                                            @if($related['newPriceFloat'] > 3000)
                                                                <img class="free-delivery-recom" src="{{asset('assets/images/otros/gratis.png')}}"
                                                                     title="Envío-gratis-Jardepot" alt="Envío gratis Jardepot">
                                                            @endif
                                                        </a>
                                                        <a class="title text-truncate" data-toggle="tooltip" title="{{$related['name']}}">{{$related['name']}}</a>
                                                        <div style="height: 18px">
                                                            @if( ($related['oldPrice']) && $related['stock'])
                                                                <p class="old-price-recom text-muted">{{$related['oldPrice'] }}</p>
                                                            @endif
                                                        </div>
                                                        <div style="height: 19px">
                                                            @if($related['stock'])
                                                                <p class="new-price-recom">{{$related['newPrice']}}</p>
                                                            @endif
                                                        </div>
                                                        <div style="height: 47px">
                                                            @if($related['stock'])
                                                                <div class="divider"></div>
                                                                <button type="button" class="btn" onclick="verifyAddCartProduct('{{$related['productType']}}','{{$related['brand']}}','{{$related['mpn']}}',1)">
                                                                    <span style="font-size: 14px"><i class="material-icons fn-color-jd">shopping_cart</i>Agregar al carrito</span>
                                                                </button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- Add Pagination -->
                                        <div class="mt-3"></div>
                                        <div class="swiper-pagination" style="margin-bottom: -5px"></div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            @endif
                            </div>
    
@endsection


   
    

   


@section('specificJS')
<div class="overlay"></div>
    <!-- jQuery Custom Scroller CDN -->
    <script src="{{asset('assets/js/components/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/components/sidebar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/components/swiper.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/components/drift.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/product.js')}}?v={{ time() }}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/cart.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/components/slick.js')}}"></script>
    {{--<script type="text/javascript" src="{{asset('assets/js/components/leaflet.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/components/leaflet-gesture-handling.min.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('assets/js/pages/spare.js')}}"></script>
    <script>
        $('.buttonFlip').click(function () {
            $('.flip-card-inner').addClass('fliped-card-inner');
            $('.flip-card-front').css('display','none');
            $('.flip-card-back').css('display','block');
        });
    </script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 5,
            spaceBetween: 20,
            slidesPerGroup: 5,
            loop: true,
            loopFillGroupWithBlank: true,
            // Responsive breakpoints
            breakpoints: {
                // when window width is >= 320px
                300: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    slidesPerGroup: 2,
                },
                320: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    slidesPerGroup: 2,
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    slidesPerGroup: 2,
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    slidesPerGroup: 4,
                }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            dragSize:true,
            preloadImages:true,
        });
        // new Drift(document.querySelector('.drift-demo-trigger'), {
        new Drift(document.getElementById('drift-trigger'), {
            paneContainer: document.querySelector('.detail'),
            inlinePane: 900,
            inlineOffsetY: -85,
            // inlineOffsetX: -85,
            containInline: true,
            hoverBoundingBox: true,
        });
    </script>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Jardepot",
      "url": "https://www.jardepot.com",
      "address": "Av. Emiliano Zapata 129, Tlaltenango, 62170 Cuernavaca, Mor., México",
      "sameAs": [
        "https://www.facebook.com/Jardepot",
        "https://www.instagram.com/jardepotsade",
        "https://twitter.com/jardepot",
        "https://www.youtube.com/channel/UCym0cCHYeEDqs70RD7Zs2-g"
      ]
    }
    </script>
@endsection
