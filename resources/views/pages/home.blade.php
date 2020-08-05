@extends('pages')

@section('metaData')
    <title>{{ $descriptionLevel2->metatitle}}</title>
    <meta title="{{ $descriptionLevel2->metatitle}}"/>
    <meta name="description" content="{{$descriptionLevel2->metadescription}}">
    <meta name="keywords" content="{{$descriptionLevel2->keywords}}">
@endsection

@section('content')
    <div class="row div-banners">
        <div class="col-xl-5 pr-0">
            <div class="mb-2 banner divimg"
                 style="background-position-y: inherit;background-image: url('assets/images/banner/podadora.jpg');box-sizing: border-box;max-height: 60%;">
                <a style="text-decoration: none; width: 100%;" href="{{url('Equipos/Podadoras')}}">
                    <div class="info" style="place-content: flex-start; align-items: flex-start; flex-direction: row;">
                        <div class="px-2" style="background: rgba(0,0,0,.4);flex-direction: column; box-sizing: border-box; display: flex; place-content: flex-start; align-items: flex-start;">
                            <h2 class="title" style="text-align: left;">Jardinería</h2>
                            <h3 class="subtitle" style="text-align: left;">Un pasto bien cuidado...<br>Comienza con el equipo adecuado.</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="mt-1 banner divimg"
                 style="background-position-y: inherit; background-image: url('assets/images/banner/motocultor.jpg'); box-sizing: border-box;max-height: 40%;">
                <a style="text-decoration: none; width: 100%; flex-direction: row; box-sizing: border-box; display: flex;" href="{{url('Equipos/Motocultores')}}">
                    <div class="info" style="place-content: flex-end; align-items: flex-end; flex-direction: row;">
                        <div class="px-2" style="background: rgba(0,0,0,.4);flex-direction: column; box-sizing: border-box; display: flex; place-content: flex-end; align-items: flex-end;">
                            <h2 class="title">Agricultura</h2>
                            <h3 class="subtitle">Tu proyecto merece el mejor respaldo.</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="mt-xl-0 col-xl-7 pl-xl-0">
            <div class="banner divimg2" style="background-image: url('assets/images/banner/aspersora.jpg');max-height: 96%">
                <a style="text-decoration: none; height: 100% !important;" href="{{url('Equipos/Aspersoras')}}">
                    <div class="info" style="place-content: flex-start center;align-items: flex-start;flex-direction: column;">
                        <div class="px-2" style="background: rgba(0,0,0,.4);flex-direction: column; box-sizing: border-box; display: flex; place-content: flex-start center; align-items: flex-start;">
                            <h2 class="title">Aspersoras</h2>
                            <h3 class="subtitle" style="text-align: left;">Para cuidar tu esfuerzo,<br>es bueno contar con el mejor equipo</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    @include('components.infoCompra')

    <div class="row mt-4">
        @foreach($menuAdditional as $key => $cat1)
            @if($key < 2)
                <div class="col-md-4">
                    <div class="border shadow p-3 bg-white rounded div-sublinks">
                        <h3>{{$cat1['nivel1']}}</h3>
                        <div class="col-sm-12">
                            <div class="jd-sublinks-items">
                                @foreach($cat1['nivel2'] as $categoria2)
                                    <a href="{{url($categoria2['href'])}}"><i class="material-icons">keyboard_arrow_right</i>{{$categoria2['name']}}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @else
                @if($key == 2)
                    <div class="col-md-4">
                        <div class="border shadow p-3 bg-white rounded div-sublinks">
                            <h3>Otros</h3>
                            <div class="md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                @endif
                            <!-- Accordion card -->
                                <div class="card">
                                    <!-- Card header -->
                                    <div class="card-header title-card" role="tab" id="headingOne{{$key}}"
                                         style="background-color: #fff;">
                                        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{$key}}"
                                           aria-expanded="true" aria-controls="collapseOne{{$key}}">
                                            <h5 class="mb-0 text-dark">
                                                {{$cat1['nivel1']}} <i class="material-icons">keyboard_arrow_down</i>
                                            </h5>
                                        </a>
                                    </div>
                                    <!-- Card body -->
                                    <div id="collapseOne{{$key}}" class="collapse {{$key == 2?'show':''}}" role="tabpanel"
                                         aria-labelledby="headingOne{{$key}}" data-parent="#accordionEx">
                                        <div class="card-body p-0">
                                            <div class="col-sm-12">
                                                <div class="jd-sublinks-items">
                                                    @foreach($cat1['nivel2'] as $key2 => $categoria2)
                                                        <a href="{{url($categoria2['href'])}}">
                                                            <i class="material-icons">keyboard_arrow_right</i>{{$categoria2['name']}}
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                @if($loop->last)
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        @endforeach
    </div>

    @include('components.caruselCanales')

@endsection