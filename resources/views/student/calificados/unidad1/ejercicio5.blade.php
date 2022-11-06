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
        <div class="row">
            <div class="col-11" style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
                <p><input type="radio" name="entrevista" id="uno" disabled> Una entrevista puede tener como objetivo conversar de un tema libre e improvisado.</p></td>
            </div>
            <div class="col-1" style="margin-top: 20px;">
                @if($respuesta == "uno") <img style="height: 25px; width: 25px; display:block; margin:auto;" src="{{asset('iconos/pulgar_abajo.png')}}" alt=""> @endif
            </div>
        </div>
        
        <div class="row">
            <div class="col-11" style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
                <p><input type="radio" name="entrevista" id="dos" disabled> Una entrevista puede tener como objetivo recoger declaraciones de personas relevantes sobre un tema de interés público.</p>
            </div>
            <div class="col-1" style="margin-top: 20px;">
                @if($respuesta == "dos") <img style="height: 25px; width: 25px; display:block; margin:auto;" src="{{asset('iconos/pulgar_arriba.png')}}" alt=""> @endif
            </div>
        </div>
        
        <div class="row">
            <div class="col-11" style="border-style: solid; margin-top: 15px; background: rgb(218, 216, 113);">
                <p><input type="radio" name="entrevista" id="tres" disabled> Una entrevista puede tener como objetivo realizar un máximo de 5 preguntas al entrevistado para conocer de un tema de intereses.</p>
            </div>
            <div class="col-1" style="margin-top: 20px;">
                @if($respuesta == "tres") <img style="height: 25px; width: 25px; display:block; margin:auto;" src="{{asset('iconos/pulgar_abajo.png')}}" alt=""> @endif
            </div>
        </div>
        
        <br>
        <button class="btn btn-success" id="repetir">Repetir</button>
        <button class="btn btn-warning" id="nota">Ver nota</button>
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

        document.getElementById('repetir').addEventListener('click', ()=>{

            fetch('u1ejercicio5/destroy')
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

        document.getElementById(@json($respuesta)).checked = 'true';

    </script>
@stop