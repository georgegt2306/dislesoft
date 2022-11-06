@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 5</b></h1>
@stop

@section('css')
    <style>
    </style>
@stop

@section('plugins.Select2', true)

@section('content')

<div class="card card-primary card-outline">
    <div class="card-header bg-primary">
        <h3><i class="fas fa-edit"></i>  LA ENTREVISTA</h3>
    </div>
    <div class="card-body">
        <br>
        <h3><b>Lee los siguientes conceptos y escoge cuál es el correcto que indique el OBJETIVO de la ENTREVISTA <button frase="Lee los siguientes conceptos y escoge cuál es el correcto que indique el OBJETIVO de la ENTREVISTA" class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}"></button></b></h3>
        <br>

        <div style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
            <p><input type="radio" name="entrevista" id="uno"> Una entrevista puede tener como objetivo conversar de un tema libre e improvisado.</p>
        </div>
        
        <div style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
            <p><input type="radio" name="entrevista" id="dos"> Una entrevista puede tener como objetivo recoger declaraciones de personas relevantes sobre un tema de interés público.</p>
        </div>
        
        <div style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
            <p><input type="radio" name="entrevista" id="tres"> Una entrevista puede tener como objetivo realizar un máximo de 5 preguntas al entrevistado para conocer de un tema de intereses.</p>
        </div>
        
        <br>
        <button class="btn btn-success" id="terminar">Terminar</button>
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

        document.getElementById('terminar').addEventListener('click', ()=>{

            if( document.getElementById('uno').checked || document.getElementById('dos').checked || document.getElementById('tres').checked )
            {
                let nota = 0;
                let respuesta = '';

                if( document.getElementById('uno').checked )
                {
                    respuesta = 'uno';
                }
                else if( document.getElementById('dos').checked )
                {
                    respuesta = 'dos';
                    nota = 10;
                }
                else if( document.getElementById('tres').checked )
                {
                    respuesta = 'tres';
                }

                let form = new FormData();
                form.append('respuesta', respuesta);
                form.append('nota', nota);

                fetch('u1ejercicio5/guardar', {
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
                    text:'Error, no ha seleccionado ninguna respuesta',
                    showConfirmButton: false,
                    timer: 1000
                });
            }

            
        })
    </script>
@stop