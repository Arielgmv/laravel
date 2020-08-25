@include('includes.header')
@include('includes.header')
<!--Imprimir por pantalla -->
<h1><?= $titulo ?></h1>
<h1>{{$titulo}}</h1>
<h2><?= $listado [0]?></h2>
<h2>{{$listado[1]}}</h2>
<p>{{date ('Y')}}</p>
<!--Comentario-->
{{--Esto es un comentario blade--}}

<!--Mostrar si existe-->
<?=isset($director) ? $director:'No hay director'; ?>

{{ $director or 'No hay director' }}

<br/>
<!--condicionales-->
@if($titulo && count($listado)>=5)
    <h1>titulo existe y es este: {{$titulo}}, y el listado es mayor a o igual a 5</h1>
@elseif($titulo)
    <h1>El titulo existe</h1>
@else
    <h1>El titulo no existe y el listado no es mayor a o igual a 5</h1>
@endif

<!--Bucles-->
@for($i=0; $i<=20; $i++)
    El numero es: {{$i}}
    <br/>
@endfor
<hr/>
<?php $contador=1; ?>
@while($contador<50)
    @if ($contador % 2 == 0)
        Numero par: {{$contador}}
    @endif
    <?php $contador++; ?>
    <br/>
@endwhile
<hr/>
@foreach($listado as $pelicula)
    <p>{{$pelicula}}</p>
@endforeach

@include('includes.footer')
