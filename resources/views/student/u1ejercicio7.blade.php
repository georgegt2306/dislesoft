@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 7</b></h1>
@stop

@section('css')
    <style>
        p1:hover
        {
            color: green;
            cursor: pointer;
            background: yellow;
        }
    </style>
@stop

@section('plugins.Select2', true)

@section('content')

<div class="card card-primary card-outline">
    <div class="card-header bg-primary">
        <h3><i class="fas fa-edit"></i>  LAS PREGUNTAS DE LA ENTREVISTA</h3>
    </div>
    <div class="card-body">
        <br>
        <h3><b>Lee los siguientes pasos con sus conceptos y selecciona las palabras mal escritas, luego, ordene correctamente los pasos. <button frase="Lee los siguientes pasos con sus conceptos y selecciona las palabras mal escritas, luego, ordene correctamente los pasos" class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}"></button></b></h3>
        <br>
        <div class="row">
            <div class="col-1"></div><div class="col-5" ondrop="drop(event)" ondragover="allowDrop(event)" style="border-style: solid; background:rgb(141, 236, 236);"><br><p id="drag1" draggable="true" ondragstart="drag(event)">
                Publicación: Es la escritvra de las preguntas en su versión final. Queban listas qara ser usadas.</p></div><div class="col-1"></div>
            <div class="col-5" ondrop="drop(event)" ondragover="allowDrop(event)" style="border-style: solid; background:rgb(141, 236, 236);"><br><p id="drag2" draggable="true" ondragstart="drag(event)">
                Revisión: Se releen las qreguntas y se consiberan los aspectos que deben ser corregidos. Se puede reuisar y corregir el texto todas las veces pue se considere necesorio.</p></div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-1"></div><div class="col-5" ondrop="drop(event)" ondragover="allowDrop(event)" style="border-style: solid; background:rgb(141, 236, 236);"><br><p id="drag3" draggable="true" ondragstart="drag(event)">
                Redacción: Para realisar la entreuista, se redactan las pregvntas. Las respvestas las proqorcionará la persona entrevistaba.</p></div><div class="col-1"></div>
            <div class="col-5" ondrop="drop(event)" ondragover="allowDrop(event)" style="border-style: solid; background:rgb(141, 236, 236);"><br><p id="drag4" draggable="true" ondragstart="drag(event)">
                Planificación: Es qensar por anticiqado: ¿Qué se va a pregvntar? ¿Cuál es su propósito? ¿A quién estarán birigidas? ¿Cuál es la estructvra de las pregvntas?.</p></div>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h4 class="text-center"><b>Pasos</b></h4>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-1"><b>1</b></div>
                        <div class="col-11" style="border-style: solid; background: rgb(218, 216, 113);" ondrop="drop(event)" ondragover="allowDrop(event)"><br></div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-1"><b>2</b></div>
                        <div class="col-11" style="border-style: solid; background: rgb(218, 216, 113);" ondrop="drop(event)" ondragover="allowDrop(event)"><br></div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-1"><b>3</b></div>
                        <div class="col-11" style="border-style: solid; background: rgb(218, 216, 113);" ondrop="drop(event)" ondragover="allowDrop(event)"><br></div>
                    </div>
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-1"><b>4</b></div>
                        <div class="col-11" style="border-style: solid; background: rgb(218, 216, 113);" ondrop="drop(event)" ondragover="allowDrop(event)"><br></div>
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <h4 class="text-center"><b>Tabla</b></h4>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <table id="tabla" class="table tabla-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>1</th>
                                        <th>2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>  
                        {{-- <div class="col-1"></div> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-5" style="border-style: solid;" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div class="col-2"></div>
                <div class="col-5" style="border-style: solid;" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-5" style="border-style: solid;" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <div class="col-2"></div>
                <div class="col-5" style="border-style: solid;" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            </div> --}}
        </div>
        <br>
        <button class="btn btn-success">Terminar</button>
    </div>
    <br>
</div>

@stop

@section('js')
    <script>

        $('#tabla').DataTable({
            paging: false,
            searching: false,
            info: false
        });

        $('.ordenes').on('click', function(e){

            if(e.target.nodeName == "BUTTON")
            {
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.rate = 0.8;
                mensaje.text = e.target.getAttribute('frase');
                speechSynthesis.speak(mensaje);
            }
            else if(e.target.nodeName == "IMG")
            {
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.rate = 0.8;
                mensaje.text = e.target.parentElement.getAttribute('frase');
                speechSynthesis.speak(mensaje);
            }
        })

        function drop(ev)
        {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
        
        function drag(ev)
        {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function allowDrop(ev) {
            ev.preventDefault();
        }
    </script>
@stop