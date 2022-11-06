@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 9</b></h1>
@stop

@section('css')
    <style>
        p1:hover
        {
            color: green;
            cursor: pointer;
            background: yellow;
        }

        h5
        {
            text-align: center;
        }
    </style>
@stop

@section('plugins.Select2', true)

@section('content')

<div class="card card-primary card-outline">
    <div class="card-header bg-primary">
        <h3><i class="fas fa-edit"></i>  MODOS Y TIEMPOS VERBALES</h3>
    </div>
    <div class="card-body">
        <br>
        <h3><b>Lee los siguientes conceptos y selecciona las palabras mal escritas, después, arrastra las oraciones hacia el cuadro de los modos que corresponda. <button frase="Lee los siguientes conceptos y selecciona las palabras mal escritas, después, arrastra las oraciones hacia el cuadro de los modos que corresponda" class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}"></button></b></h3>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-12">
                    <div class="row">
                        <div class="col-12" style="border: solid; background: rgb(113, 216, 216);">
                            <br>
                            <h5 style="margin-bottom: 16px;">Modo indicativo</h5>
                            <p1>Enumcia</p1> <p1>el</p1> <p1>hecho</p1> <p1>de</p1> <p1>manera</p1> <p1>real</p1> <p1>y</p1> <p1>objetiua</p1>.
                            <p></p>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <center class="col-12"><i class="fas fa-arrow-down"></i></center>
                                <h2 class="col-12 text-center"><b>EJEMPLOS</b></h2>
                            </div>
                        </div>
                        <div class="col-12" style="border: solid; background: rgb(241, 234, 132);" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="row">
                        <div class="col-12" style="border: solid; background: rgb(113, 216, 216);">
                            <br>
                            <h5>Modo subjuntivo</h5>
                            <p1></p1>Expresa <p1>deseo</p1>, <p1>anhelo</p1>, <p1>suqosición</p1>, <p1>probadilidad</p1>, <p1>temor</p1>.
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <center class="col-12"><i class="fas fa-arrow-down"></i></center>
                                <h2 class="col-12 text-center"><b>EJEMPLOS</b></h2>
                            </div>
                        </div>
                        <div class="col-12" style="border: solid; background: rgb(241, 234, 132);" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12">
                    <div class="row">
                        <div class="col-12" style="border: solid; background: rgb(113, 216, 216);">
                            <br>
                            <h5>Modo imperativo</h5>
                            <p1>Se</p1> <p1>vtiliza</p1> <p1>para</p1> <p1>dar</p1> <p1>órdenes</p1>, <p1>hacer</p1> <p1>una</p1> <p1>petición</p1> <p1>o</p1> <p1>dar</p1> <p1>un</p1> <p1>consejo</p1>.
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <center class="col-12"><i class="fas fa-arrow-down"></i></center>
                                <h2 class="col-12 text-center"><b>EJEMPLOS</b></h2>
                            </div>
                        </div>
                        <div class="col-12" style="border: solid; background: rgb(241, 234, 132);" ondrop="drop(event)" ondragover="allowDrop(event)">
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-12" style="border: solid; background: rgb(241, 234, 132); margin-bottom: 15px;" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <br>
                    <p id="drag1" draggable="true" ondragstart="drag(event)">Es probable que gasten más dinero antes de terminar el viaje.</p>
                </div>
                <div class="col-12" style="border: solid; background: rgb(241, 234, 132); margin-bottom: 15px;" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <br>
                    <p id="drag2" draggable="true" ondragstart="drag(event)">Lautaro prepara el salón para la fiesta de hoy.</p>
                </div>
                <div class="col-12" style="border: solid; background: rgb(241, 234, 132); margin-bottom: 15px;" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <br>
                    <p id="drag3" draggable="true" ondragstart="drag(event)">Tenga cuidado, es un lugar muy peligroso.</p>
                </div>

                <div class="col-12" style="border: solid; background: rgb(241, 234, 132); margin-bottom: 15px;" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <br>
                    <p id="drag4" draggable="true" ondragstart="drag(event)">El artista pintó muchos cuadros memorables.</p>
                </div>

                <div class="col-12" style="border: solid; background: rgb(241, 234, 132); margin-bottom: 15px;" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <br>
                    <p id="drag5" draggable="true" ondragstart="drag(event)">Limpia la mesa, quedó llena de papeles.</p>
                </div>

                <div class="col-12" style="border: solid; background: rgb(241, 234, 132); margin-bottom: 15px;" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <br>
                    <p id="drag6" draggable="true" ondragstart="drag(event)">Puede ser que él apruebe el examen, pero también es posible que repruebe.</p>
                </div>
            </div>

        </div>
        
    </div>
    <br>
</div>

@stop

@section('js')
    <script>

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

        addEventListener('click', (e)=>{
            if(e.target.localName == 'p1' && e.target.style.color != 'red')
            {
                let context = e.target.textContent;
                /* $('#tablaparrafo').DataTable().row.add(['<button class="btn btn-secondary eliminar_dato">-</button>', e.target.textContent]).draw(); */
                
                [...document.querySelectorAll('p1')].map(e => {
                    if(e.textContent == context)
                    {
                        e.style.color = "red";
                    }
                })

            }
        });
    </script>
@stop