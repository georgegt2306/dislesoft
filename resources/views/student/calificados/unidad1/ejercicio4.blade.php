@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 4</b></h1>
@stop

@section('css')
    <style>
    </style>
@stop

@section('plugins.Select2', true)

@section('content')

<div class="card card-primary card-outline">
    <div class="card-header bg-primary">
        <h3><i class="fas fa-edit"></i>  Novela de aventuras</h3>
    </div>
    <div class="card-body">
        <br>
        <h3><b>Lee el siguiente párrafo y selecciona las palabras mal escritas. <button frase="Lee el siguiente párrafo y selecciona las palabras mal escritas" class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}"></button></b></h3>
        <p1>Una</p1> <p1>estrategia</p1> <p1>para</p1> <p1>odtener</p1> <p1>información</p1> <p1>sobre</p1> <p1>un</p1> <p1>tema</p1> <p1>es</p1> <p1>medionte</p1> <p1>una</p1> <p1>entreuista</p1>, <p1>que</p1> <p1>consiste</p1> <p1>en</p1> <p1>una</p1> <p1>conversación</p1> <p1>entre</p1> <p1>dos</p1> <p1>o</p1> <p1>más</p1> <p1>qersonas</p1>, <p1>en</p1> <p1>la</p1> <p1>cual</p1> <p1>una</p1> <p1>de</p1> <p1>ellas</p1> <p1>formula</p1> <p1>preguntas</p1> <p1>con</p1> <p1>el</p1> <p1>proqósito</p1> <p1>de</p1> <p1>que</p1> <p1>el</p1> <p1>o</p1> <p1>los</p1> <p1>entreuistados</p1> <p1>revelen</p1> <p1>asqectos</p1> <p1>de</p1> <p1>sí</p1> <p1>mismos</p1> <p1>o</p1> <p1>den</p1> <p1>oqiniones</p1> <p1>sodre</p1> <p1>un</p1> <p1>tema</p1>. <p1>En</p1> <p1>este</p1> <p1>caso</p1>, <p1>hay</p1> <p1>un</p1> <p1>acuerdo</p1> <p1>previo</p1> <p1>para</p1> <p1>bifundir</p1> <p1>la</p1> <p1>versión</p1> <p1>gradada</p1> <p1>o</p1> <p1>la</p1> <p1>transcripción</p1> <p1>de</p1> <p1>la</p1> <p1>entrevista</p1>.
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-1"></div>
                <div class="col-sm-4 col-10">
                    <table id="tablaparrafo" class="table tabla-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Aciertos</th>
                                <th>Palabra</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($respuesta_temporal as $respuesta)
                                <tr>
                                    @if(in_array($respuesta, $palabras_incorrectas))
                                        <td><img style="height: 20px; width: 20px;" src="{{asset('iconos/pulgar_arriba.png')}}"></td>
                                    @else
                                        <td><img style="height: 20px; width: 20px;" src="{{asset('iconos/pulgar_abajo.png')}}"></td>
                                    @endif
                                    <td>{{$respuesta}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-4 col-1"></div>
            </div>
        </div>
        <button class="btn btn-success" id="repetir">Repetir</button>
        <button class="btn btn-warning" id="ver_nota">Ver Nota</button>
        @if ($boton_restaurar_nota)
            <button class="btn btn-danger" id="restaurar_nota">Restaurar Nota Mayor</button>
        @endif
    </div>
    <br>
</div>

<!-- Modal -->
<x-modal-calificacion></x-modal-calificacion>

@stop

@section('js')
    <script>
        $('#tablaparrafo').DataTable({
            paging: false,
            searching: false,
            info: false
        });

        $('.close-modal').on('click', function(){
            $('#modalNota').modal('hide');
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

        document.getElementById('repetir').addEventListener('click', ()=>{

            fetch(`nota/destroy/1/4`)
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


        document.getElementById('ver_nota').addEventListener('click', async function(){
            
            [...document.getElementById('estrellas').children].map( e => e.remove());

            await fetch('nota/1/4')
            .then(res => res.json())
            .then(res => {
                let nota = Number(res.nota);
                document.getElementById('nota').textContent = `Tu nota es: ${nota}/10`;
                document.getElementById('frase_calificacion').textContent = res.frase;

                document.getElementById('imagen_calificacion').setAttribute('src',`{{asset('iconos/imagen_nota/')}}/${res.imagen}`);
               
                for(let i=0; i<(res.cantidad_estrellas); i++)
                {
                    let estrella = document.createElement('img');
                    estrella.src = `{{asset('iconos/estrella.png')}}`;
                    estrella.style.height = '35px';
                    estrella.style.width = '35px';
                    document.getElementById('estrellas').append(estrella);
                }

            });

            setTimeout(() => {
                $('#modalNota').modal('show');
            }, 100);
            

        })

        document.getElementById('restaurar_nota').addEventListener('click', () => {

            fetch(`nota/restaurar/1/4`)
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

        });


    </script>
@stop