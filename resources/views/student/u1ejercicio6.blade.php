@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 6</b></h1>
@stop

@section('css')
    <style>
    </style>
@stop

@section('plugins.Select2', true)

@section('content')

<div class="card card-primary card-outline">
    <div class="card-header bg-primary">
        <h3><i class="fas fa-edit"></i>  ESTRUCTURA DE LA ENTREVISTA</h3>
    </div>
    <div class="card-body">
        <br>
        <h3><b>Identifica y ordena las siguientes sílabas para formar las palabras correspondientes a la estructura de la novela, después, une cada estructura con su respecto concepto. <button frase="Identifica y ordena las siguientes sílabas para formar las palabras correspondientes a la estructura de la novela, después, une cada estructura con su respecto concepto" class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}"></button></b></h3>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-12" style="border-style: solid;">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-9" id="botones-titulo">
                            <button>lo</button>
                            <button>tu</button>
                            <button>tí</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2 col-2"></div><input id="input-titulo" type="text" class="form-control col-sm-7 col-6" disabled><div class="col-sm-1 col-1"></div><button id="borrar-titulo" title="limpiar" data-toggle="tooltip" data-placement="top" class="btn btn-warning col-sm-1 col-2"><i class="fas fa-eraser"></i></button><div class="col-sm-1"></div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-6 col-12" style="border-style: solid;">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-9" id="botones-cuerpo">
                            <button>po</button>
                            <button>cuer</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2 col-2"></div><input id="input-cuerpo" type="text" class="form-control col-sm-7 col-6" disabled><div class="col-sm-1 col-1"></div><button id="borrar-cuerpo" title="limpiar" data-toggle="tooltip" data-placement="top" class="btn btn-warning col-sm-1 col-2"><i class="fas fa-eraser"></i></button><div class="col-sm-1"></div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-6 col-12" style="border-style: solid;">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-9" id="botones-entrada">
                            <button>tra</button>
                            <button>en</button>
                            <button>da</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="ccol-sm-2 col-2"></div><input type="text" id="input-entrada" class="form-control col-sm-7 col-6" disabled><div class="col-sm-1 col-1"></div><button id="borrar-entrada" title="limpiar" data-toggle="tooltip" data-placement="top" class="btn btn-warning col-sm-1 col-2"><i class="fas fa-eraser"></i></button><div class="col-sm-1"></div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-6 col-12" style="border-style: solid;">
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-9" id="botones-conclusion">
                            <button>sión</button>
                            <button>con</button>
                            <button>clu</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2 col-2"></div><input id="input-conclusion" type="text" class="form-control col-sm-7 col-6" disabled><div class="col-sm-1 col-1"></div><button id="borrar-conclusion" title="limpiar" data-toggle="tooltip" data-placement="top" class="btn btn-warning col-sm-1 col-2"><i class="fas fa-eraser"></i></button><div class="col-sm-1"></div>
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
                <p>Es una presentación del entrevistado (datos biográficos básicos) y la mención del motivo de la entrevista (ganó un premio, está de visita, realiza una labor importante, etcétera). <select name="" id=""></select></p>
            </div>
            <div class="col-3"></div>

            <div class="col-3"></div>
            <div class="col-6" style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
                <br>
                <p>Es la transcripción del diálogo entre entrevistador y entrevistado, ya sea de forma literal, intercalando comentarios, o empleando fragmentos para relatar el encuentro. <select name="" id=""></select></p>
            </div>
            <div class="col-3"></div>

            <div class="col-3"></div>
            <div class="col-6" style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
                <br>
                <p>Se puede seleccionar una pregunta y respuesta reveladoras que aporten un cierre al texto, o se concluye con algunas opiniones sobre el entrevistado o el tema tratado. <select name="" id=""></select></p>
            </div>
            <div class="col-3"></div>

            <div class="col-3"></div>
            <div class="col-6" style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
                <br>
                <p>El entrevistador escoge alguna frase relevante expresada por el entrevistado, o elige un título que transmita el tono y la idea del contenido de la conversación. <select name="" id=""></select></p>
            </div>
            <div class="col-3"></div>
        </div>
        <br>
        <button id="terminar" class="btn btn-success">Terminar</button>
    </div>
    <br>
</div>

@stop

@section('js')
    {{-- botones titulo --}}
    <script>

        document.getElementById('terminar').addEventListener('click', ()=>{

            let nota = 0;
            let datos = [];

            if( document.getElementById('input-titulo').classList.contains('is-valid') && document.getElementById('input-cuerpo').classList.contains('is-valid') && document.getElementById('input-entrada').classList.contains('is-valid') && document.getElementById('input-conclusion').classList.contains('is-valid') )
            {
                if( document.getElementById('select_titulo').value == 'nudo' ) nota = Number(nota) + 2.50;
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

                fetch('u1ejercicio6/guardar', {
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

        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })

        document.getElementById('botones-titulo').addEventListener('click', (e)=>{

            if(e.target.nodeName == "BUTTON")
            {
                document.getElementById('input-titulo').value = `${document.getElementById('input-titulo').value}${e.target.textContent}`;
                e.target.setAttribute('disabled', 'disabled');
            }

            if(document.getElementById('input-titulo').value == "título")
            {
                document.getElementById('input-titulo').classList.add('is-valid');
                document.getElementById('borrar-titulo').setAttribute('disabled', 'disabled');
                [...document.querySelectorAll('select')].map(e => {
                    
                    let option = document.createElement('option');
                    option.textContent = document.getElementById('input-titulo').value;
                    
                    e.append(option);

                })
            }

        })

        document.getElementById('borrar-titulo').addEventListener('click', ()=>{

            document.getElementById('input-titulo').value = '';
            document.getElementById('input-titulo').classList.remove('is-valid', 'is-invalid');

            [...document.getElementById('botones-titulo').children].map(e => e.removeAttribute('disabled'))

        })
    </script>
    {{-- fin botones titulo --}}

    {{-- cuerpo --}}
    <script>
        document.getElementById('botones-cuerpo').addEventListener('click', (e)=>{

            if(e.target.nodeName == "BUTTON")
            {
                document.getElementById('input-cuerpo').value = `${document.getElementById('input-cuerpo').value}${e.target.textContent}`;
                e.target.setAttribute('disabled', 'disabled');
            }

            if(document.getElementById('input-cuerpo').value == "cuerpo")
            {
                document.getElementById('input-cuerpo').classList.add('is-valid');
                document.getElementById('borrar-cuerpo').setAttribute('disabled', 'disabled');
                [...document.querySelectorAll('select')].map(e => {
                    
                    let option = document.createElement('option');
                    option.textContent = document.getElementById('input-cuerpo').value;
                    
                    e.append(option);

                })
            }

        })

        document.getElementById('borrar-cuerpo').addEventListener('click', ()=>{

            document.getElementById('input-cuerpo').value = '';
            document.getElementById('input-cuerpo').classList.remove('is-valid', 'is-invalid');

            [...document.getElementById('botones-cuerpo').children].map(e => {
                e.removeAttribute('disabled');
            })

        })
    </script>
    {{-- fin cuerpo --}}

    {{-- nudo --}}
    <script>
        document.getElementById('botones-entrada').addEventListener('click', (e)=>{

            if(e.target.nodeName == "BUTTON")
            {
                document.getElementById('input-entrada').value = `${document.getElementById('input-entrada').value}${e.target.textContent}`;
                e.target.setAttribute('disabled', 'disabled');
            }

            if(document.getElementById('input-entrada').value == "entrada")
            {
                document.getElementById('input-entrada').classList.add('is-valid');
                document.getElementById('borrar-entrada').setAttribute('disabled', 'disabled');
                [...document.querySelectorAll('select')].map(e => {
                    
                    let option = document.createElement('option');
                    option.textContent = document.getElementById('input-entrada').value;
                    
                    e.append(option);

                })
            }

        })

        document.getElementById('borrar-entrada').addEventListener('click', ()=>{

            document.getElementById('input-entrada').value = '';
            document.getElementById('input-entrada').classList.remove('is-valid', 'is-invalid');

            [...document.getElementById('botones-entrada').children].map(e => {
                e.removeAttribute('disabled');
            })

        })
    </script>
    {{-- fin nudo --}}

    {{-- conclusion --}}
    <script>
        document.getElementById('botones-conclusion').addEventListener('click', (e)=>{

            if(e.target.nodeName == "BUTTON")
            {
                document.getElementById('input-conclusion').value = `${document.getElementById('input-conclusion').value}${e.target.textContent}`;
                e.target.setAttribute('disabled', 'disabled');
            }

            if(document.getElementById('input-conclusion').value == "conclusión")
            {
                document.getElementById('input-conclusion').classList.add('is-valid');
                document.getElementById('borrar-conclusion').setAttribute('disabled', 'disabled');
                [...document.querySelectorAll('select')].map(e => {
                    
                    let option = document.createElement('option');
                    option.textContent = document.getElementById('input-conclusion').value;
                    
                    e.append(option);

                })
            }

        })

        document.getElementById('borrar-conclusion').addEventListener('click', ()=>{

            document.getElementById('input-conclusion').value = '';
            document.getElementById('input-conclusion').classList.remove('is-valid', 'is-invalid');

            [...document.getElementById('botones-conclusion').children].map(e => {
                e.removeAttribute('disabled');
            })

        })
    </script>
    {{-- fin conclusion --}}

@stop