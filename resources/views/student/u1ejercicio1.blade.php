@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 1</b></h1>
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
        <h3><i class="fas fa-edit"></i>  NOVELA DE AVENTURAS</h3>
    </div>
    <div class="card-body">
        <br>
        <h3><b>Lee el siguiente párrafo y selecciona las palabras mal escritas <button frase="Lee el siguiente párrafo y selecciona las palabras mal escritas" class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}"></button></b></h3>
        <p1>La</p1> <p1>novela</p1> <p1>de</p1> <p1>ayenturas</p1> <p1>es</p1> <p1>un</p1> <p1>subgénero</p1> <p1>literario</p1> <p1>cuyo</p1> <p1>argvmento</p1> <p1>se</p1> <p1>centra</p1> <p1>en</p1> <p1>los</p1> <p1>viajes</p1>, <p1>las</p1> <p1>qeripecias</p1> <p1>y</p1> <p1>el</p1> <p1>riesgo</p1> <p1>que</p1> <p1>corren</p1> <p1>sus</p1> <p1>qrotagonistas</p1>, <p1>generalmente</p1> <p1>en</p1> <p1>lugares</p1> <p1>nisteriosos</p1> <p1>o</p1> <p1>lejanos</p1>. <p1>Puebe</p1> <p1>incluir</p1> <p1>elementos</p1> <p1>hisfóricos</p1>, <p1>sociales</p1>, <p1>de</p1> <p1>fantasía</p1> <p1>y</p1> <p1>hasta</p1> <p1>de</p1> <p1>ciencia</p1> <p1>ficción</p1>, <p1>qero</p1> <p1>la</p1> <p1>trama</p1> <p1>se</p1> <p1>enfoca</p1> <p1>en</p1> <p1>las</p1> <p1>acciones</p1> <p1>y</p1> <p1>avenfuras</p1> <p1>del</p1> <p1>héroe</p1> <p1>o</p1> <p1>la</p1> <p1>heroína</p1>. <p1>Aunque</p1> <p1>los</p1> <p1>svcesos</p1> <p1>sean</p1> <p1>fantásticos</p1>, <p1>el</p1> <p1>escenario</p1> <p1>es</p1> <p1>un</p1> <p1>lugar</p1> <p1>real</p1>, <p1>localizadle</p1> <p1>en</p1> <p1>un</p1> <p1>mapa</p1>.
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
        <button class="btn btn-success" id="terminar">Terminar</button>
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

            fetch('u1ejercicio1/guardar', {
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