{{--Vista escritorio--}}
<style>
    .icon_ofertas {
        background-image: url('http://localhost/jardepotapi/public/assets/images/icons/header_ofertas.png');
        background-size: cover;
        width: 40px !important;
        height: 40px !important;
        transition: all 0.3s ease-in-out;
    }

    .icon_ofertas:hover {
        background-image: url('http://localhost/jardepotapi/public//assets/images/icons/header_ofertas_alt.png');
        background-size: cover;
        width: 40px !important;
        height: 40px !important;
    }

    .icon_whatsapp {
        background-image: url('http://localhost/jardepotapi/public//assets/images/icons/header_whatsapp.png');
        background-size: cover;
        width: 50px !important;
        height: 50px !important;
        transition: all 0.3s ease-in-out;
    }

    .icon_whatsapp:hover {
        background-image: url('http://localhost/jardepotapi/public//assets/images/icons/header_whatsapp_alt.png');
        background-size: cover;
        width: 50px !important;
        height: 50px !important;
    }

    .icon_refacciones {
        background-image: url('http://localhost/jardepotapi/public//assets/images/icons/header_refacciones.png');
        background-size: cover;
        width: 40px !important;
        height: 40px !important;
        transition: all 0.3s ease-in-out;
    }

    .icon_refacciones:hover {
        background-image: url('http://localhost/jardepotapi/public//assets/images/icons/header_refacciones_alt.png');
        background-size: cover;
        width: 40px !important;
        height: 40px !important;
    }

    .icon_carrito {
        background-image: url('http://localhost/jardepotapi/public//assets/images/icons/header_carrito.png');
        background-size: cover;
        width: 25px !important;
        height: 25px !important;
        transition: all 0.3s ease-in-out;
    }

    .icon_carrito:hover {
        background-image: url('http://localhost/jardepotapi/public//assets/images/icons/header_carrito_alt.png');
        background-size: cover;
        width: 40px !important;
        height: 46px !important;
    }

    @media (min-width: 1500px) {
        .ml-xxl-1 {
            margin-left: .25rem !important;
        }
    }

    @media (max-width: 1260px) {
        .ml-xxs-n1 {
            margin-left: -.25rem !important;
        }

        .ml-xxs-n2 {
            margin-left: -.5rem !important;
        }

        .ml-xxs-n3 {
            margin-left: -.75rem !important;
        }

        .ml-xxs-1 {
            margin-left: .25rem !important;
        }

        .ml-xxs-2 {
            margin-left: .5rem !important;
        }

        .ml-xxs-3 {
            margin-left: .75rem !important;
        }
    }
</style>
<div class="sticky-top">
    <nav class="navbar-dark bg-dark  d-none d-md-none d-lg-block">
        <div class="container align-items-center">
            <div class="div-navbar row" style="height: 100px;">
                <div class="col-sm" style="padding: 0; line-height:30px;">
                    <div class="text-barra text-center" style="font-size: 22px;line-height: 23px;!important;">
                        Querétaro<br>
                        <a href="tel:4423960365" style="font-size: 16px !important;">
                            442 396 0365
                        </a>
                        <br>
                        <a href="tel:4421239272" style="font-size: 16px !important;">
                            442 123 9272
                        </a>
                        <br>
                        <a href="tel:4423801818" onclick="return gtag_report_conversion('undefined');" style="font-size: 16px !important;">
                            442 380 1818
                        </a>
                    </div>
                </div>

                <div class="col-sm" style="padding: 0; line-height:30px;">
                    <div class="text-barra text-center" style="font-size: 22px;">
                        Veracruz
                        <br>
                        <a href="tel:2293300992" style="font-size: 16px !important;">
                            229 330 0992
                        </a>
                    </div>
                </div>
                <div class="col-sm" style="padding: 0; line-height:30px;">
                    <div class="text-barra text-center" style="font-size: 22px;">
                        Morelos
                        <br>
                        <a href="tel:7773179652" onclick="return gtag_report_conversion('undefined');" style="font-size: 16px !important;">
                            777 317 9652
                        </a>
                        <br>
                        <a href="tel:7773645067" style="font-size: 16px !important;">
                            777 364 5067
                        </a>
                    </div>
                </div>
                <div class="col-sm" style="padding: 0; line-height:30px;">
                    <div class="text-barra text-center" style="font-size: 22px;">
                        Estado de México
                        <br>
                        <a href="tel:7226481040" style="font-size: 16px !important;">
                            722 648 1040
                        </a>
                    </div>
                </div>
                <div class="col-sm" style="padding: 0; line-height:30px;">
                    <div class="text-barra text-center" style="font-size: 22px;">
                        Jalisco
                        <br>
                        <a href="tel:3310775286" onclick="return gtag_report_conversion('undefined');"  style="font-size: 16px !important;">
                            331 077 5286
                        </a>
                        <br>
                        <a href="tel:3317283353" style="font-size: 16px !important;">
                            331 728 3353
                        </a>
                    </div>
                </div>
                <div class="col-sm" style="padding: 0; line-height:30px;">
                    <div class="text-barra text-center" style="font-size: 22px;">
                        Nuevo León<br>
                        <a href="tel:8120635708" style="font-size: 16px !important;">
                            81 2063 5708
                        </a><br>
                        <a href="tel:8111135702" style="font-size: 16px !important;">
                            81 1113 5702
                        </a>
                    </div>
                </div>

                <div class="col-sm" style="padding: 0; line-height:30px;">
                    <div class="text-barra text-center" style="font-size: 18px;">
                        CDMX
                        <br>
                        <a href="tel:5549968849" style="font-size: 16px !important;">
                            55 4996 8849
                        </a>
                        <br>
                        <a href="tel:5549974360" style="font-size: 16px !important;">
                            55 4997 4360
                        </a>
                    </div>
                </div>

                <div class="col-sm" style="padding: 0; line-height:30px;">
                    <div class="text-barra text-center" style="font-size: 22px;">
                        Mayoreo<br>
                        <a href="tel:5544598506" style="font-size: 16px !important;">
                            55 4459 8506
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm " style="line-height: 45px; height: 30px   ">
            <div style="font-size: 28px;" class="col-sm text-barra text-center">
                ¡Llámanos!
                <a style="font-size: 30px !important" href="tel:8002129225">
                    800 212 92 25
                </a>
            </div>
        </div>

        <div class="container-xl" style="height: 82px !important">
            <div class="container ">
                <div class="row">
                    <div class="col-md-1 my-3 ml-xl-1 mr-lg-n4 ml-md-n3 pr-md-n3 ml-xxs-n3">
                        <i style="color: #ffffff; font-size: 50px; cursor:pointer;" id="toggle-navbar"
                           class="material-icons d-flex">menu</i>
                    </div>
                    <div class="col-md-2 my-3 mr-n3 ml-n3 ml-xxs-1">
                        <a class="navbar-brand" href="{{url('/')}}" style="height: 50px">
                            {{-- <picture>
                                <source srcset="{{asset('img/logos/logoJardepot.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/logos/logoJardepot.png')}}" type="image/png">
                                <img class="logo-navbar" style="height:100%;"
                                    src="{{asset('img/logos/logoJardepot.png')}}" alt="¡Tu equipo siempre contigo!"
                                    title="¡Tu equipo siempre contigo!">
                            </picture>--}}
                            <img class="logo-navbar" style="height:100%;" src="{{asset('img/logos/logoJardepot.png')}}"
                                 alt="¡Tu equipo siempre contigo!" title="¡Tu equipo siempre contigo!">

                            {{-- <img class="logo-navbar" style="width: 58px;margin-left: 20px"
                                src="{{asset('assets/images/otros/calaberita.png')}}" alt="Imagen Temporada"
                                title="Imagen Temporada">--}}
                        </a>
                    </div>
                    <div class="col-md-7 my-2 mr-n5 ml-xxs-3">
                        <div class="" id="navbarsExample06">
                            <form id="search-form" class="form-inline my-2 my-md-0 search-form">
                                <div class="input-group mb-3 mt-1" style="width: 95%">
                                    <input id="inputSearch" type="text" class="form-control inputSearch"
                                           placeholder="Busca tu producto..." aria-label="Busca tu producto"
                                           aria-describedby="Busca tu producto."
                                           style="height: 40px !important; margin-bottom:-10px !important;">
                                    <div class="input-group-append">
                                        <span class="input-group-addon">
                                            <button class="btn btnSearch" type="submit" id=""
                                                    style="height: 40px !important">
                                                <i style="color: gray" class="material-icons d-flex">search</i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2 ml-md-n2 ml-xl-n4">
                        <button class="btn btn ml-4" role="button" style="padding: 0 0 0 0 !important; color: #FFF"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <div class="icon_carrito" style="margin-bottom:-6px; margin-top:1px;"
                                 alt="Mostrar mi carrito" title="Mostrar mi carrito"></div>
                            {{-- <i class="material-icons d-flex"
                                style="color: #f68600;font-size: 24px !important;">shopping_cart</i> --}}
                            <span class="cart-items-count" id="items-count-nav1">0</span>
                            <div style="font-size: 11px;" class="mt-2">Carrito</div>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left"
                             aria-labelledby="dropdownMenuButton" style="width: 300px">
                            <div class="dropdown-item">
                                <span style="font-size: 15px"
                                      id="products-coun-nav1"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a
                                    href="{{url('cart')}}" class="text-muted">Ver carrito</a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div id="items-card-nav1"></div>
                            <div class="dropdown-item" id="option-dropdown-cart1">
                                <div class="mt-1"
                                     style="flex-direction: row; box-sizing: border-box; display: flex; place-content: center space-between; align-items: center;">
                                    <button class="btn btn-secondary btn-lg btn-circle" onclick="removeAllProducts()"
                                            data-toggle="tooltip" title="Borrar todo">
                                        <i class="material-icons">remove_shopping_cart</i>
                                    </button>
                                    <a class="btn btn-warning btn- btn-circle" href="{{url('cart')}}"
                                       data-toggle="tooltip" title="Pagar">
                                        <i class="material-icons">check</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @php
                            $producto = "";
                            if(isset($product['name'])){
                            $producto = urlencode(" " . $product['name']);
                            }
                        @endphp
                        <button class="btn ml-2 ml-xxs-1" role="button"
                                style="color: #FFF;padding: 0 0 0 0 !important; margin-top:5px;" type="button"
                                onclick="location.href='{{route('sales')}}'">
                            <div class="icon_ofertas mx-1" alt="¡Ver ofertas!" title="¡Ver ofertas!"></div>
                            <div style="font-size: 11px;" class="mt-1">¡Ofertas!</div>
                        </button>
                        <button class="btn ml-2 ml-xxs-1" role="button"
                                style="color: #FFF;padding: 0 0 0 0 !important; margin-top:5px;" type="button"
                                onclick="return gtag_report_conversion('https://wa.me/525551857805?text=Hola,%20me%20gustaría%20saber%20sobre%20{{ $producto }}')">
                            <div class="icon_whatsapp mx-1" alt="Asesoría" title="Asesoría"></div>
                            <div style="font-size: 11px;" class="mt-1">Asesoría</div>
                        </button>
                        <button class="btn ml-2 ml-xxs-1" role="button"
                                style="color: #FFF;padding: 0 0 0 0 !important; margin-top:5px;" type="button"
                                onclick="window.open('https://wa.me/527226481040?text=Hola,%20me%20gustaría%20saber%20sobre%20las%20refacciones%20de%20{{ $producto }}')">
                            <div class="icon_refacciones mx-2" alt="Refacciones" title="Refacciones"></div>
                            <div style="font-size: 11px;" class="mt-1">Refacciones</div>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </nav>

    <nav id="menu-familias" class="navbar navbar-expand-lg navbar-light bg-light shadow-sm d-none d-md-none d-lg-block">
        <div class="container-xl">
            <div class="collapse navbar-collapse row" id="navbarsDesktopL">
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    <ul class="navbar-nav mr-auto col-md-12 d-flex flex-wrap justify-content-center align-items-center"
                        id="menu">
                        @foreach ($navbar as $key => $categoria1)
                            <li class="nav-item dropdown mr-xl-4 ml-md-1 ml-xl-2 column-items ml-xxs-n1" id="prueba1"
                                style="@if($key == 0){{ 'margin-left:-1.7rem;' }}@endif">
                                <a class="d-flex flex-wrap justify-content-center align-items-center"
                                   {{--                                    title="{{$categoria1['nivel1']}}" href="{{route('category',['category'=>$categoria1['nivel1'] ])}}">--}}
                                   title="{{$categoria1['nivel1']}}" href="#">  {{$categoria1['nivel1']}}
                                </a>
                                @if(isset($categoria1['nivel2']))
                                    <ul class="{{count($categoria1['nivel2']) > 10 ? 'column-navbar':''}} dropdown-menu">

                                        @foreach($categoria1['nivel2'] as $categoria2)
                                            <li class="dropdown-item">
                                                <a class="text-left text-muted" title="{{$categoria2['name']}}"
                                                   href="{{url($categoria2['href'])}}">{{$categoria2['name']}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</div>

{{--Vista Movil --}}
<nav class="navbar navbar-dark sticky-top bg-dark  d-block d-sm-block d-lg-none"
     style="background-color: #3d3c3b !important;">
    <div class="div-navbar-movil">
        <div class="row" style="width: 100%">
            <div class="col-10">
                <div class="text-left">
                    <a data-toggle="modal" data-target="#modalTelefonos">
                        <i class="material-icons">call</i>Más Teléfonos<i class="material-icons">keyboard_arrow_down</i>
                    </a>
                </div>
            </div>
            <div class="col-2 text-right">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarsMovil" aria-controls="navbarsMovil" aria-expanded="false"
                        aria-label="Toggle navigation" style="border-color: transparent">
                    <i class="material-icons">menu</i>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <a class="navbar-brand" href="{{url('/')}}">
                {{-- <picture>
                    <source srcset="{{asset('img/logos/logoJardepot.webp')}}" type="image/webp">
                    <source srcset="{{asset('img/logos/logoJardepot.png')}}" type="image/png">
                    <img class="logo-navbar" style="width: 60%" src="{{asset('img/logos/logoJardepot.png')}}"
                        alt="Logo Jardepot" title="Logo Jardepot">
                </picture>--}}
                <img class="logo-navbar" style="width: 60%" src="{{asset('img/logos/logoJardepot.png')}}"
                     alt="Logo Jardepot" title="Logo Jardepot">
                {{--<img class="logo-navbar" style="width: 40px" src="{{asset('assets/images/otros/calaberita.png')}}"
                    alt="Imagen Temporada title=" Imagen Temporada">--}}
            </a>
        </div>
        <div class="col-4" style="margin-top: 1px">
            <button class="btn dropdown-toggle" style="color: #FFF" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style="color: #fff !important;cursor:pointer;">
                    <i class="material-icons" style="color: #f68600;font-size: 28px !important;">shopping_cart</i>
                    <span class="cart-items-count" id="items-count-nav2"></span>
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" aria-labelledby="dropdownMenuButton"
                 style="width: 300px">
                <div class="dropdown-item">
                    <span style="font-size: 15px" id="products-coun-nav2"></span>&nbsp;&nbsp;&nbsp;&nbsp;<a
                        href="{{url('cart')}}" class="text-muted">Ver carrito</a>
                </div>
                <div class="dropdown-divider"></div>
                <div id="items-card-nav2"></div>

                <div class="dropdown-item" id="option-dropdown-cart2">
                    <div class="mt-1"
                         style="flex-direction: row; box-sizing: border-box; display: flex; place-content: center space-between; align-items: center;">
                        <button class="btn btn-secondary btn-lg btn-circle" onclick="removeAllProducts()"
                                data-toggle="tooltip" title="Borrar todo">
                            <i class="material-icons">remove_shopping_cart</i>
                        </button>
                        <a class="btn btn-warning btn- btn-circle" href="{{url('cart')}}" data-toggle="tooltip"
                           title="Pagar">
                            <i class="material-icons">check</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-collapse collapse" id="navbarsMovil">
        <ul class="navbar-nav mr-auto">
            @foreach ($navbar as $categoria1)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown{{$key}}" data-toggle="dropdown"
                       aria-expanded="false">{{$categoria1['nivel1']}}</a>
                    @if(isset($categoria1['nivel2']))
                        <div class="dropdown-menu {{count($categoria1['nivel2']) > 10 ? 'column-navbar':''}} "
                             aria-labelledby="dropdown{{$key}}">
                            @foreach($categoria1['nivel2'] as $categoria2)
                                <a class="dropdown-item" href="{{url($categoria2['href'])}}">{{$categoria2['name']}}</a>
                            @endforeach
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
    <div class="navbar-collapse">
        <form class="form-inline my-2 my-md-0 search-form">
            <div class="input-group" style="width: 95%;margin-top: 0">
                <input type="text" class="form-control inputSearch" placeholder="Busca tu producto..."
                       aria-label="Busca tu producto" aria-describedby="Busca tu producto..." style="margin-top: 0">
                <div class="input-group-append">
                    <span class="input-group-addon">
                        <button class="btn btnSearch" type="submit" id="" style="margin-top: 0">
                            <i style="color: gray" class="material-icons d-flex">search</i>
                        </button>
                    </span>
                </div>
            </div>
        </form>
    </div>

    <div class="col-12 mt-2">
        <a class="mr-2 btn-warning btn-sm d-flex" href="tel:8002129225" style="text-decoration: none;"><i
                class="material-icons iconMod">call</i>Llámanos</a>
    </div>
    </div>
</nav>


<!-- Modal Teléfonos-->
<div class="modal fade" id="modalTelefonos" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
     aria-labelledby="modalTelefonosLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTelefonosLabel">LLámanos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div style="padding: 0;" class="col-12 col-md-3">
                            <div style="margin-bottom: 20px;">
                                <p style="margin-bottom: 0px;font-size: 20px">Del Interior</p>
                                <a href="tel:8002129225" class="telModal">
                                    <span class="my-4" style="font-size: 20px; font-weight: 500;">
                                        <i class="material-icons">call</i>800 212 9225
                                    </span>
                                </a>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <p style="margin-bottom: 0px; font-size: 20px">Mayoreo</p>
                                <a href="tel:5544598506" class="telModal">
                                    <span class="my-4" style="font-size: 20px; font-weight: 500;">
                                        <i class="material-icons">call</i>55 4459 8506
                                    </span>
                                </a>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <p style="margin-bottom: 0px; font-size: 20px">Refacciones</p>
                                <a href="tel:7226481040" class="telModal">
                                    <span class="my-4" style="font-size: 20px; font-weight: 500;">
                                        <i class="material-icons">call</i>722 648 1040
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div style="padding: 0;" class="col-12 col-md-2">
                            <div style="margin-bottom: 20px;">
                                <p>CDMX</p>
                                <a href="tel:5549968849" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>55 4996 8849
                                    </span>
                                </a><br>
                                <a href="tel:5549974360" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>55 4997 4360
                                    </span>
                                </a><br>
                                <a href="tel:5551857805" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>55 5185 7805
                                    </span>
                                </a><br>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <p style="margin-bottom: 0px;">Querétaro</p>
                                <a href="tel:4423960365" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>442 396 0365
                                    </span>
                                </a><br>
                                <a href="tel:4421239272" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>442 123 9272
                                    </span>
                                </a><br>
                            </div>
                        </div>
                        <div style="padding: 0;" class="col-12 col-md-2">
                            <div style="margin-bottom: 20px;">
                                <p style="margin-bottom: 0px;">Guadalajara</p>
                                <a href="tel:3317283353" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>33 1728 3353
                                    </span>
                                </a><br>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <p>Morelos</p>
                                <a href="tel:7773179630" class="telModal">
                                    <span style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>777 317 9630
                                    </span>
                                </a><br>
                                <a href="tel:7773179652" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>777 317 9652
                                    </span>
                                </a><br>
                                <a href="tel:7773645067" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>777 364 5067
                                    </span>
                                </a><br>
                                <a href="tel:7773645635" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>777 364 5635
                                    </span>
                                </a><br>
                            </div>
                        </div>
                        <div style="padding: 0;" class="col-12 col-md-2">
                            <div style="margin-bottom: 20px;">
                                <p style="margin-bottom: 0px;">Nuevo León</p>
                                <a href="tel:8120635708" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>81 2063 5708
                                    </span>
                                </a><br>
                                <a href="tel:8111135702" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>81 1113 5702
                                    </span>
                                </a><br>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <p style="margin-bottom: 0px;">Edo. Mex.</p>
                                <a href="tel:7226481040" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>722 648 1040
                                    </span>
                                </a><br>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <p style="margin-bottom: 0px;">Michoacán</p>
                                <a href="tel:4433560484" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>443 356 0484
                                    </span>
                                </a><br>
                            </div>
                        </div>
                        <div style="padding: 0;" class="col-12 col-md-2">
                            <div style="margin-bottom: 20px;">
                                <p style="margin-bottom: 0px;">Puebla</p>
                                <a href="tel:2227051726" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>222 705 1726
                                    </span>
                                </a><br>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <p style="margin-bottom: 0px;">Veracruz</p>
                                <a href="tel:2293300992" class="telModal">
                                    <span class="my-4" style="font-size: 15px; font-weight: 300;">
                                        <i class="material-icons">call</i>229 330 0992
                                    </span>
                                </a><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTelefonosLabel2">Atención a Comercializadoras y Mayoristas</h5>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div style="padding: 0;" class="row">
                            <div class="col-md-12">
                                <a class="telModal" href="tel:5544598506">
                                    <i class="material-icons">call</i> 55 4459 8506
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div style="padding: 0;" class="row">
                            <div class="col-md-1"><i class="material-icons">email</i></div>
                            <div class="col-md-4">
                                <a href="mailto:mayoreo@jardepot.com" class="telModal">mayoreo@jardepot.com</a>
                            </div>
                            <div class="col-md-3">
                                <a href="mailto:ventas@jardepot.com" class="telModal">ventas@jardepot.com</a>
                            </div>
                            <div class="col-md-4">
                                <a href="mailto:refacciones@jardepot.com" class="telModal">refacciones@jardepot.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '#toggle-navbar', function () {
        if ($("#menu-familias").hasClass('d-lg-block')) {
            $("#menu-familias").removeClass('d-lg-block')
        } else {
            $("#menu-familias").addClass('d-lg-block')
        }
    })
</script>
