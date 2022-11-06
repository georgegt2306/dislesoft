@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 4</b></h1>
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
        <h3><i class="fas fa-edit"></i>  La entrevista</h3>
    </div>
    <div class="card-body">
        <br>
        <h3><b>Lee el siguiente párrafo y selecciona las palabras mal escritas <button frase="Lee el siguiente párrafo y selecciona las palabras mal escritas" class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}"></button></b></h3>
        <p1>Una</p1> <p1>estrategia</p1> <p1>para</p1> <p1>odtener</p1> <p1>información</p1> <p1>sobre</p1> <p1>un</p1> <p1>tema</p1> <p1>es</p1> <p1>medionte</p1> <p1>una</p1> <p1>entreuista</p1>, <p1>que</p1> <p1>consiste</p1> <p1>en</p1> <p1>una</p1> <p1>conversación</p1> <p1>entre</p1> <p1>dos</p1> <p1>o</p1> <p1>más</p1> <p1>qersonas</p1>, <p1>en</p1> <p1>la</p1> <p1>cual</p1> <p1>una</p1> <p1>de</p1> <p1>ellas</p1> <p1>formula</p1> <p1>preguntas</p1> <p1>con</p1> <p1>el</p1> <p1>proqósito</p1> <p1>de</p1> <p1>que</p1> <p1>el</p1> <p1>o</p1> <p1>los</p1> <p1>entreuistados</p1> <p1>revelen</p1> <p1>asqectos</p1> <p1>de</p1> <p1>sí</p1> <p1>mismos</p1> <p1>o</p1> <p1>den</p1> <p1>oqiniones</p1> <p1>sodre</p1> <p1>un</p1> <p1>tema</p1>. <p1>En</p1> <p1>este</p1> <p1>caso</p1>, <p1>hay</p1> <p1>un</p1> <p1>acuerdo</p1> <p1>previo</p1> <p1>para</p1> <p1>bifundir</p1> <p1>la</p1> <p1>versión</p1> <p1>gradada</p1> <p1>o</p1> <p1>la</p1> <p1>transcripción</p1> <p1>de</p1> <p1>la</p1> <p1>entrevista</p1>.
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-1"></div>
                <div class="col-sm-4 col-10">
                    <table id="tablaparrafo" class="table tabla-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Acción</th>
                                <th>Palabra</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-4 col-1"></div>
            </div>
        </div>
        <button class="btn btn-success" id="terminar">terminar</button>
    </div>
    <br>
</div>

@stop

@section('js')
    <script>
        $('#tablaparrafo').DataTable({
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

        addEventListener('click', (e)=>{
            if(e.target.localName == 'p1' && e.target.style.color != 'red')
            {
                let context = e.target.textContent;
                $('#tablaparrafo').DataTable().row.add(['<button class="btn btn-secondary eliminar_dato">-</button>', e.target.textContent]).draw();
                
                [...document.querySelectorAll('p1')].map(e => {
                    if(e.textContent == context)
                    {
                        e.style.color = "red";
                    }
                })

            }
        });

        $('#tablaparrafo tbody').on("click", ".eliminar_dato", function()
        {
            [...document.querySelectorAll('p1')].map(e => {
                if(e.textContent == $('#tablaparrafo').DataTable().row($(this).parents('tr')).data()[1])
                {
                    e.style.color = "black";
                }
            })

            $('#tablaparrafo').DataTable().row($(this).parents('tr')).remove().draw();
        });

        document.getElementById('terminar').addEventListener('click', ()=>{

            let datos = [];

            if($('#tablaparrafo').DataTable().data().length > 0)
            {
                for (let i = 0; i < $('#tablaparrafo').DataTable().data().length; i++)
                {
                    datos.push($('#tablaparrafo').DataTable().cell(i,1).data());
                }
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text:'Error, no ha seleccionado ninguna palabra',
                    showConfirmButton: false,
                    timer: 1000
                });

                return;
            }

            let form = new FormData();
            form.append('respuesta', JSON.stringify(datos));

            fetch('u1ejercicio4/guardar', {
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
        })
    </script>
@stop