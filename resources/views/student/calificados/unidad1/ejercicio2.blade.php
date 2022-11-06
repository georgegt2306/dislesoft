@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 2</b></h1>
@stop

@section('css')
    <style>
    </style>
@stop

@section('plugins.Select2', true)

@section('content')

<div class="card card-primary card-outline">
    <div class="card-header bg-primary">
        <h3><i class="fas fa-edit"></i>  ESTRUCTURA DE LA NOVELA</h3>
    </div>
    <div class="card-body">
        <br>
        <h3><b>Identifica y ordena las siguientes sílabas para formar las palabras correspondientes a la estructura de la novela, después, une cada estructura con su respecto concepto <button frase="Identifica y ordena las siguientes sílabas para formar las palabras correspondientes a la estructura de la novela, después, une cada estructura con su respecto concepto" class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}"></button></b></h3>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-12" style="border-style: solid;">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-9" id="botones-introduccion">
                            <button disabled>duc</button>
                            <button disabled>in</button>
                            <button disabled>ción</button>
                            <button disabled>tro</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2 col-2"></div><input id="input-introduccion" value="introducción" type="text" class="form-control col-sm-7 col-6 is-valid" disabled><div class="col-sm-1 col-1"></div><button disabled id="borrar-introduccion" title="limpiar" data-toggle="tooltip" data-placement="top" class="btn btn-warning col-sm-1 col-2"><i class="fas fa-eraser"></i></button><div class="col-sm-1"></div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-6 col-12" style="border-style: solid;">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-9" id="botones-acontecimiento-inicial">
                            <button disabled>te</button>
                            <button disabled>con</button>
                            <button disabled>mien</button>
                            <button disabled>a</button>
                            <button disabled>to</button>
                            <button disabled>ci</button>
                            <button disabled>cial</button>
                            <button disabled>ni</button>
                            <button disabled>i</button>
                            <button disabled>espacio</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2 col-2"></div><input id="input-acontecimiento-inicial" value="acontecimiento inicial" type="text" class="form-control col-sm-7 col-6 is-valid" disabled><div class="col-sm-1 col-1"></div><button disabled id="borrar-acontecimiento-inicial" title="limpiar" data-toggle="tooltip" data-placement="top" class="btn btn-warning col-sm-1 col-2"><i class="fas fa-eraser"></i></button><div class="col-sm-1"></div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-6 col-12" style="border-style: solid;">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-9" id="botones-nudo">
                            <button disabled>do</button>
                            <button disabled>nu</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2 col-2"></div><input type="text" value="nudo" id="input-nudo" class="form-control col-sm-7 col-6 is-valid" disabled><div class="col-sm-1 col-1"></div><button id="borrar-nudo" disabled title="limpiar" data-toggle="tooltip" data-placement="top" class="btn btn-warning col-sm-1 col-2"><i class="fas fa-eraser"></i></button><div class="col-sm-1"></div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-6 col-12" style="border-style: solid;">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-9" id="botones-desenlace">
                            <button disabled>sen</button>
                            <button disabled>ce</button>
                            <button disabled>de</button>
                            <button disabled>la</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2 col-2"></div><input id="input-desenlace" value="desenlace" type="text" class="form-control col-sm-7 col-6 is-valid" disabled><div class="col-sm-1 col-1"></div><button  disabled id="borrar-desenlace" title="limpiar" data-toggle="tooltip" data-placement="top" class="btn btn-warning col-sm-1 col-2"><i class="fas fa-eraser"></i></button><div class="col-sm-1"></div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6" style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
                <br>
                <p>Describe las distintas actuaciones que los personajes llevan a cabo para resolver el conflicto planteado y restituir el equilibrio. <select name="select_nudo" id="select_nudo" disabled> <option selected value="">{{$respuesta_temporal[0]}}</option> </select></p>
            </div>
            <div class="col-3" style="margin-top: 35px;"> @if($respuesta_temporal[0] == $palabras_correctas[0]) <img style="height: 45px; width: 45px; display:block; margin:auto;" src="http://dislesoft.test/iconos/pulgar_arriba.png" alt=""> @else <img style="height: 45px; width: 45px; display:block; margin:auto;" src="http://dislesoft.test/iconos/pulgar_abajo.png" alt=""> @endif</div>
            <div class="col-3"></div>
            <div class="col-6" style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
                <br>
                <p>Es la primera parte del relato. Debe atraer la atención del lector. <select name="select_introduccion" id="select_introduccion" disabled> <option selected value="">{{$respuesta_temporal[1]}}</option> </select></p>
            </div>
            <div class="col-3" style="margin-top: 35px;"> @if($respuesta_temporal[1] == $palabras_correctas[1]) <img style="height: 45px; width: 45px; display:block; margin:auto;" src="http://dislesoft.test/iconos/pulgar_arriba.png" alt=""> @else <img style="height: 45px; width: 45px; display:block; margin:auto;" src="http://dislesoft.test/iconos/pulgar_abajo.png" alt=""> @endif </div>
            <div class="col-3"></div>
            <div class="col-6" style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
                <br>
                <p>Es el hecho que rompe el equilibrio original y que desencadena el conflicto que dará lugar a la acción. <select name="select_acontecimiento" id="select_acontecimiento" disabled> <option selected value="">{{$respuesta_temporal[2]}}</option> </select></p>
            </div>
            <div class="col-3" style="margin-top: 35px;"> @if($respuesta_temporal[2] == $palabras_correctas[2]) <img style="height: 45px; width: 45px; display:block; margin:auto;" src="http://dislesoft.test/iconos/pulgar_arriba.png" alt=""> @else <img style="height: 45px; width: 45px; display:block; margin:auto;" src="http://dislesoft.test/iconos/pulgar_abajo.png" alt=""> @endif </div>
            <div class="col-3"></div>
            <div class="col-6" style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
                <br>
                <p>Es la situación final que supone la solución del conflicto, a la que se llega como consecuencia de las acciones de los personajes. <select name="select_desenlace" id="select_desenlace" disabled> <option selected value="">{{$respuesta_temporal[3]}}</option> </select></p>
            </div>
            <div class="col-3" style="margin-top: 35px;"> @if($respuesta_temporal[3] == $palabras_correctas[3]) <img style="height: 45px; width: 45px; display:block; margin:auto;" src="http://dislesoft.test/iconos/pulgar_arriba.png" alt=""> @else <img style="height: 45px; width: 45px; display:block; margin:auto;" src="http://dislesoft.test/iconos/pulgar_abajo.png" alt=""> @endif </div>
        </div>
        <br>
        <button id="repetir" class="btn btn-success">Repetir</button>
        <button id="nota" class="btn btn-warning">Ver Nota</button>
    </div>
    <br>
</div>

@stop

@section('js')
    {{-- botones introduccion --}}
    <script>

        /* $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        }) */

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

        document.getElementById('repetir').addEventListener('click', ()=>{

            fetch('u1ejercicio2/destroy')
            .then(res => res.json())
            .then(res => {
                if(res.sms == 'ok')
                {
                    window.location.reload();
                } 
                else
                {
                    Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text:'Hubo un error al procesar su petición',
                    showConfirmButton: false,
                    timer: 1000
                });
                }
            })

        })

        document.getElementById('nota').addEventListener('click', ()=>{



        })

    </script>

@stop