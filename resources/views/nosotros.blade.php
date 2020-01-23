@extends('main')
@section('seccion')
    <h1>Este es mi equipo de trabajo</h1>
    @foreach ($equipo as $integrantes)
    <a href="{{ route('nosotros',$integrantes) }}" class="h4 text-danger">{{$integrantes}}</a><br>
    @endforeach
    @if (!empty($nombre))
        @switch($nombre)
            @case($nombre=='ignacio')
                <h2 class="mt-4">El nombre es {{$nombre}}:</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Phasellus id quam a diam laoreet facilisis. Mauris bibendum elit lectus, et ornare sem sodales id.</p>
                @break
            @case($nombre=='juanito')
                <h2 class="mt-4">El nombre es {{$nombre}}:</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Phasellus id quam a diam laoreet facilisis. Mauris bibendum elit lectus, et ornare sem sodales id.</p>
                @break
            @case($nombre=='pedrito')
                <h2 class="mt-4">El nombre es {{$nombre}}:</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Phasellus id quam a diam laoreet facilisis. Mauris bibendum elit lectus, et ornare sem sodales id.</p>
                @break
            @default
                
        @endswitch
    @endif
@endsection
