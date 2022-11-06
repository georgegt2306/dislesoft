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
                            <button>duc</button>
                            <button>in</button>
                            <button>ción</button>
                            <button>tro</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2 col-2"></div><input id="input-introduccion" type="text" class="form-control col-sm-7 col-6" disabled><div class="col-sm-1 col-1"></div><button id="borrar-introduccion" title="limpiar" data-toggle="tooltip" data-placement="top" class="btn btn-warning col-sm-1 col-2"><i class="fas fa-eraser"></i></button><div class="col-sm-1"></div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-6 col-12" style="border-style: solid;">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-9" id="botones-acontecimiento-inicial">
                            <button>te</button>
                            <button>con</button>
                            <button>mien</button>
                            <button>a</button>
                            <button>to</button>
                            <button>ci</button>
                            <button>cial</button>
                            <button>ni</button>
                            <button>i</button>
                            <button>espacio</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2 col-2"></div><input id="input-acontecimiento-inicial" type="text" class="form-control col-sm-7 col-6" disabled><div class="col-sm-1 col-1"></div><button id="borrar-acontecimiento-inicial" title="limpiar" data-toggle="tooltip" data-placement="top" class="btn btn-warning col-sm-1 col-2"><i class="fas fa-eraser"></i></button><div class="col-sm-1"></div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-6 col-12" style="border-style: solid;">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-9" id="botones-nudo">
                            <button>do</button>
                            <button>nu</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2 col-2"></div><input type="text" id="input-nudo" class="form-control col-sm-7 col-6" disabled><div class="col-sm-1 col-1"></div><button id="borrar-nudo" title="limpiar" data-toggle="tooltip" data-placement="top" class="btn btn-warning col-sm-1 col-2"><i class="fas fa-eraser"></i></button><div class="col-sm-1"></div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-6 col-12" style="border-style: solid;">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-9" id="botones-desenlace">
                            <button>sen</button>
                            <button>ce</button>
                            <button>de</button>
                            <button>la</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2 col-2"></div><input id="input-desenlace" type="text" class="form-control col-sm-7 col-6" disabled><div class="col-sm-1 col-1"></div><button id="borrar-desenlace" title="limpiar" data-toggle="tooltip" data-placement="top" class="btn btn-warning col-sm-1 col-2"><i class="fas fa-eraser"></i></button><div class="col-sm-1"></div>
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
                <p>Describe las distintas actuaciones que los personajes llevan a cabo para resolver el conflicto planteado y restituir el equilibrio. <select name="select_nudo" id="select_nudo"></select></p>
            </div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-6" style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
                <br>
                <p>Es la primera parte del relato. Debe atraer la atención del lector. <select name="select_introduccion" id="select_introduccion"></select></p>
            </div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-6" style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
                <br>
                <p>Es el hecho que rompe el equilibrio original y que desencadena el conflicto que dará lugar a la acción. <select name="select_acontecimiento" id="select_acontecimiento"></select></p>
            </div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-6" style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
                <br>
                <p>Es la situación final que supone la solución del conflicto, a la que se llega como consecuencia de las acciones de los personajes. <select name="select_desenlace" id="select_desenlace"></select></p>
            </div>
        </div>
        <br>
        <button id="terminar" class="btn btn-success">Terminar</button>
    </div>
    <br>
</div>

@stop

@section('js')
    {{-- botones introduccion --}}
    <script>

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        document.getElementById('terminar').addEventListener('click', ()=>{

            let nota = 0;
            let datos = [];

            if( document.getElementById('input-introduccion').classList.contains('is-valid') && document.getElementById('input-acontecimiento-inicial').classList.contains('is-valid') && document.getElementById('input-desenlace').classList.contains('is-valid') && document.getElementById('input-nudo').classList.contains('is-valid') )
            {
                if( document.getElementById('select_nudo').value == 'nudo' ) nota = Number(nota) + 2.50;
                if( document.getElementById('select_desenlace').value == 'desenlace' ) nota = Number(nota) + 2.50;
                if( document.getElementById('select_acontecimiento').value == 'acontecimiento inicial' ) nota = Number(nota) + 2.50;
                if( document.getElementById('select_introduccion').value == 'introducción' ) nota = Number(nota) + 2.50;

                datos.push(document.getElementById('select_nudo').value);
                datos.push(document.getElementById('select_introduccion').value);
                datos.push(document.getElementById('select_acontecimiento').value);
                datos.push(document.getElementById('select_desenlace').value);

                let form = new FormData();
                form.append('nota', nota);
                form.append('respuesta', JSON.stringify(datos));

                fetch('u1ejercicio2/guardar', {
                    headers: {'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').getAttribute('content')},
                    method: 'post', 
                    body: form
                })
                .then(res => res.json())
                .then(res => {

                    if(res.sms == "ok")
                    {
                        Swal.fire({
                            icon: 'success',
                            title: 'Enviado',
                            text:'Se han enviado tus respuestas, tu nota es '+res.nota,
                            showConfirmButton: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                            else{
                                window.location.reload();
                            }
                        })

                        
                    }
                    else
                    {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text:'Hubo un error al enviar las respuestas',
                            showConfirmButton: true
                        });
                    }

                })

            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text:'Error, debe ordenar las palabras de los primeros cuadros',
                    showConfirmButton: false,
                    timer: 1500
                });
            }
            
        })

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

        document.getElementById('botones-introduccion').addEventListener('click', (e)=>{

            if(e.target.nodeName == "BUTTON")
            {
                document.getElementById('input-introduccion').value = `${document.getElementById('input-introduccion').value}${e.target.textContent}`;
                e.target.setAttribute('disabled', 'disabled');
            }

            if(document.getElementById('input-introduccion').value == "introducción")
            {
                document.getElementById('input-introduccion').classList.add('is-valid');
                document.getElementById('borrar-introduccion').setAttribute('disabled', 'disabled');
                [...document.querySelectorAll('select')].map(e => {
                    
                    let option = document.createElement('option');
                    option.textContent = document.getElementById('input-introduccion').value;
                    
                    e.append(option);

                })
            }

        })

        document.getElementById('borrar-introduccion').addEventListener('click', ()=>{

            document.getElementById('input-introduccion').value = '';
            document.getElementById('input-introduccion').classList.remove('is-valid', 'is-invalid');

            [...document.getElementById('botones-introduccion').children].map(e => e.removeAttribute('disabled'))

        })
    </script>
    {{-- fin botones introduccion --}}

    {{-- acontecimiento inicial --}}
    <script>
        document.getElementById('botones-acontecimiento-inicial').addEventListener('click', (e)=>{

            if(e.target.nodeName == "BUTTON")
            {
                if(e.target.textContent == "espacio")
                {
                    document.getElementById('input-acontecimiento-inicial').value = `${document.getElementById('input-acontecimiento-inicial').value} `;
                }
                else document.getElementById('input-acontecimiento-inicial').value = `${document.getElementById('input-acontecimiento-inicial').value}${e.target.textContent}`;
                
                e.target.setAttribute('disabled', 'disabled');
            }

            if(document.getElementById('input-acontecimiento-inicial').value == "acontecimiento inicial")
            {
                document.getElementById('input-acontecimiento-inicial').classList.add('is-valid');
                document.getElementById('borrar-acontecimiento-inicial').setAttribute('disabled', 'disabled');
                [...document.querySelectorAll('select')].map(e => {
                    
                    let option = document.createElement('option');
                    option.textContent = document.getElementById('input-acontecimiento-inicial').value;
                    
                    e.append(option);

                })
            }

        })

        document.getElementById('borrar-acontecimiento-inicial').addEventListener('click', ()=>{

            document.getElementById('input-acontecimiento-inicial').value = '';
            document.getElementById('input-acontecimiento-inicial').classList.remove('is-valid', 'is-invalid');

            [...document.getElementById('botones-acontecimiento-inicial').children].map(e => {
                e.removeAttribute('disabled');
            })

        })
    </script>
    {{-- fin acontecimiento inicial --}}

    {{-- nudo --}}
    <script>
        document.getElementById('botones-nudo').addEventListener('click', (e)=>{

            if(e.target.nodeName == "BUTTON")
            {
                document.getElementById('input-nudo').value = `${document.getElementById('input-nudo').value}${e.target.textContent}`;
                e.target.setAttribute('disabled', 'disabled');
            }

            if(document.getElementById('input-nudo').value == "nudo")
            {
                document.getElementById('input-nudo').classList.add('is-valid');
                document.getElementById('borrar-nudo').setAttribute('disabled', 'disabled');
                [...document.querySelectorAll('select')].map(e => {
                    
                    let option = document.createElement('option');
                    option.textContent = document.getElementById('input-nudo').value;
                    
                    e.append(option);

                })
            }

        })

        document.getElementById('borrar-nudo').addEventListener('click', ()=>{

            document.getElementById('input-nudo').value = '';
            document.getElementById('input-nudo').classList.remove('is-valid', 'is-invalid');

            [...document.getElementById('botones-nudo').children].map(e => {
                e.removeAttribute('disabled');
            })

        })
    </script>
    {{-- fin nudo --}}

    {{-- desenlace --}}
    <script>
        document.getElementById('botones-desenlace').addEventListener('click', (e)=>{

            if(e.target.nodeName == "BUTTON")
            {
                document.getElementById('input-desenlace').value = `${document.getElementById('input-desenlace').value}${e.target.textContent}`;
                e.target.setAttribute('disabled', 'disabled');
            }

            if(document.getElementById('input-desenlace').value == "desenlace")
            {
                document.getElementById('input-desenlace').classList.add('is-valid');
                document.getElementById('borrar-desenlace').setAttribute('disabled', 'disabled');
                [...document.querySelectorAll('select')].map(e => {
                    
                    let option = document.createElement('option');
                    option.textContent = document.getElementById('input-desenlace').value;
                    
                    e.append(option);

                })
            }

        })

        document.getElementById('borrar-desenlace').addEventListener('click', ()=>{

            document.getElementById('input-desenlace').value = '';
            document.getElementById('input-desenlace').classList.remove('is-valid', 'is-invalid');

            [...document.getElementById('botones-desenlace').children].map(e => {
                e.removeAttribute('disabled');
            })

        })
    </script>
    {{-- fin desenlace --}}

@stop