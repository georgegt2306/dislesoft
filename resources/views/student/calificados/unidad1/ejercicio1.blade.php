@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 1</b></h1>
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
        <p1>La</p1> <p1>novela</p1> <p1>de</p1> <p1>ayenturas</p1> <p1>es</p1> <p1>un</p1> <p1>subgénero</p1> <p1>literario</p1> <p1>cuyo</p1> <p1>argvmento</p1> <p1>se</p1> <p1>centra</p1> <p1>en</p1> <p1>los</p1> <p1>viajes</p1>, <p1>las</p1> <p1>qeripecias</p1> <p1>y</p1> <p1>el</p1> <p1>riesgo</p1> <p1>que</p1> <p1>corren</p1> <p1>sus</p1> <p1>qrotagonistas</p1>, <p1>generalmente</p1> <p1>en</p1> <p1>lugares</p1> <p1>nisteriosos</p1> <p1>o</p1> <p1>lejanos</p1>. <p1>Puebe</p1> <p1>incluir</p1> <p1>elementos</p1> <p1>hisfóricos</p1>, <p1>sociales</p1>, <p1>de</p1> <p1>fantasía</p1> <p1>y</p1> <p1>hasta</p1> <p1>de</p1> <p1>ciencia</p1> <p1>ficción</p1>, <p1>qero</p1> <p1>la</p1> <p1>trama</p1> <p1>se</p1> <p1>enfoca</p1> <p1>en</p1> <p1>las</p1> <p1>acciones</p1> <p1>y</p1> <p1>avenfuras</p1> <p1>del</p1> <p1>héroe</p1> <p1>o</p1> <p1>la</p1> <p1>heroína</p1>. <p1>Aunque</p1> <p1>los</p1> <p1>svcesos</p1> <p1>sean</p1> <p1>fantásticos</p1>, <p1>el</p1> <p1>escenario</p1> <p1>es</p1> <p1>un</p1> <p1>lugar</p1> <p1>real</p1>, <p1>localizadle</p1> <p1>en</p1> <p1>un</p1> <p1>mapa</p1>.
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
                            @if($respuesta_temporal)
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
                            @endif
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

            fetch(`nota/destroy/1/1`)
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

            await fetch('nota/1/1')
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

            fetch(`nota/restaurar/1/1`)
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