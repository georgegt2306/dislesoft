@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 3</b></h1>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/wordfind.css')}}">
    <style>
        /* p {
            font: 22pt sans-serif;
            margin: 20px 20px 0px 20px;
        } */
    </style>
@stop

@section('plugins.Select2', true)

@section('content')

<div class="card card-primary card-outline">
    <div class="card-header bg-primary">
        <h3><i class="fas fa-edit"></i>  ELEMENTOS QUE COMPONEN LA NOVELA</h3>
    </div>
    <div class="card-body">
        <div id="juego"></div>
        <div id="Palabras"></div>
        {{-- <button id="solve">Solve</button> --}}
    </div>
    <br>
</div>

@stop

@section('js')
    <script src="{{asset('json/wordfind.js')}}"></script>
    <script src="{{asset('json/wordfindgame.js')}}"></script>

    <script>
        var words = ['accion','tiempo','personajes', 'marcoescenico'];
        var gamePuzzle = wordfindgame.create(words, '#juego', '#Palabras'); 
            
        var puzzle = wordfind.newPuzzle(words,{height: 18, width:18, fillBlanks: false});
        wordfind.print(puzzle);   
            
        $('#solve').click( function() {wordfindgame.solve(gamePuzzle, words);});
    </script>
@stop