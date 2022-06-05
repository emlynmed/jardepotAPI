<div id="breadcrumb-route" class="row d-flex pl-2" style="color: rgba(0,0,0,.87); background: rgba(0,0,0,.03);">

    @php
        $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $datosActuales = explode("/",$link);
    @endphp

    <div class="d-flex align-items-center flex-wrap">

        <i class="material-icons mr-2">home</i>
        <a href="{{route("home")}}"><span>Inicio</span></a>
        <i class="material-icons mr-2">navigate_next</i>

        @if($level1 == 'cat')
            <a href="{{route('category',['category'=>$level2])}}"><span>{{ucfirst($level2)}}</span></a>

        @else
            @switch($level1)
                @case('Marcas')

                @break

                @case('Equipos')

                @break
                @case('categoria')

                @break
                @default
                {{--                <a href="{{route('category',['category'=>$level1])}}"><span>{{ucfirst($level1)}}</span></a>--}}
                <a href="#"><span>{{ucfirst($level1)}}</span></a>
                <i class="material-icons mr-2">navigate_next</i>
            @endswitch


            @if(isset($level3))
                <a href="{{route('products', ['categoryLevel1'=> $level1,'categoryLevel2'=> $level2 ])}}">
                    <span>{{ucfirst($level2)}}</span></a>
                <i class="material-icons mr-2">navigate_next</i>
                <b>{{ucfirst($level3)}}</b>
            @else
                <b>{{ucfirst($level2)}}</b></a>
            @endif
        @endif
    </div>


    <div class="breadcrumbText" style="font-size: 19px; font-weight: bold; color: #f68600; margin-left: 25px;">
        <ul>
            <li>#QuédateEnCasa Nosotros lo enviamos...</li>
            <li>JarDepot, ¡Tu equipo Siempre Contigo!</li>
            <li>#QuédateEnCasa Nosotros lo enviamos...</li>
        </ul>
    </div>
</div>
