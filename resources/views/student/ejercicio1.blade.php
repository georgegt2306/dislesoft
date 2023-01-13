@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 1</b></h1>
@stop

@section('css')
@stop

@section('plugins.Select2', true)

@section('content')

<div class="card card-primary card-outline">
    <div class="card-header bg-primary">
        <h2><i class="fas fa-edit"></i>  SELECCIONAR LOS DIBUJOS QUE CONTENGAN EL SONIDO EN SU NOMBRE <button class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}" alt=""></button></h2>
    </div>
    <div class="card-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#d" role="tab" aria-controls="home" aria-selected="true"><h2><b>d</b></h2></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#b" role="tab" aria-controls="profile" aria-selected="false"><h2><b>b</b></h2></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#q" role="tab" aria-controls="contact" aria-selected="false"><h2><b>q</b></h2></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#l" role="tab" aria-controls="contact" aria-selected="false"><h2><b>l</b></h2></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ll" role="tab" aria-controls="contact" aria-selected="false"><h2><b>ll</b></h2></a>
              </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            {{-- primer subitem --}}
            <div class="tab-pane fade show active" id="d" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-md-6">
                        <div id="botonesd">
                            <button palabra="botella"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/d/botella.jpg')}}" alt=""></button>
                            <button palabra="dado"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/d/dado.jpg')}}" alt=""></button>
                            <button palabra="dinero"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/d/dinero.jpg')}}" alt=""></button>
                            <button palabra="foco"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/d/foco.jpg')}}" alt=""></button>
                            <button palabra="tijera"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/d/tijera.jpg')}}" alt=""></button>
                            <button palabra="tomate"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/d/tomate.jpg')}}" alt=""></button>
                            <button palabra="tenedor"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/d/tenedor.jpg')}}" alt=""></button>
                            <button palabra="dedo"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/d/dedo.jpg')}}" alt=""></button>
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <table id="tablad" class="table table-bordered table-striped ">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Eliminar</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <button id="calificard" class="btn btn-success">Terminar</button>
                <button id="reiniciard" class="btn btn-warning">Reiniciar</button>

            </div>
            {{-- fin primer subitem --}}

            {{-- segundo subitem --}}
            <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col-md-6">
                        <div id="botonesb">
                            <button palabra="arbol"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/b/arbol.jpg')}}" alt="arbol"></button>
                            <button palabra="auto"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/b/auto.jpg')}}" alt=""></button>
                            <button palabra="avion"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/b/avion.jpg')}}" alt=""></button>
                            <button palabra="barco"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/b/barco.jpg')}}" alt=""></button>
                            <button palabra="cama"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/b/cama.jpg')}}" alt=""></button>
                            <button palabra="embudo"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/b/embudo.jpg')}}" alt=""></button>
                            <button palabra="telefono"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/b/telefono.jpg')}}" alt=""></button>
                            <button palabra="boca"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/b/boca.jpg')}}" alt=""></button>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                    <table id="tablab" class="table table-bordered table-striped ">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Eliminar</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <button id="calificarb" class="btn btn-success">Terminar</button>
                <button id="reiniciarb" class="btn btn-warning">Reiniciar</button>

            </div>
            {{-- fin segundo subitem --}}

            {{-- tercer subitem --}}
            <div class="tab-pane fade" id="q" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-md-6">
                        <div id="botonesq">
                            <button palabra="bicicleta"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/q/bicicleta.jpg')}}" alt=""></button>
                            <button palabra="botella"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/q/botella.jpg')}}" alt=""></button>
                            <button palabra="computadora"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/q/computadora.jpg')}}" alt=""></button>
                            <button palabra="disco"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/q/disco.jpg')}}" alt=""></button>
                            <button palabra="peluquero"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/q/peluquero.jpg')}}" alt=""></button>
                            <button palabra="queso"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/q/queso.jpg')}}" alt=""></button>
                            <button palabra="zapato"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/q/zapato.jpg')}}" alt=""></button>
                            <button palabra="quimico"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/q/quimico.jpg')}}" alt=""></button>
                            <button palabra="mariquita"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/q/mariquita.jpg')}}" alt=""></button>
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <table id="tablaq" class="table tabla-bordered table-striped" style="width:100px">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Eliminar</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <button id="calificarq" class="btn btn-success">Terminar</button>
                <button id="reiniciarq" class="btn btn-warning">Reiniciar</button>
            </div>
            {{-- fin tercer subitem --}}

            {{-- cuarto subitem --}}
            <div class="tab-pane fade" id="l" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                <div class="col-md-6">
                        <div id="botonesl">
                            <button palabra="casa"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/l/casa.jpg')}}" alt=""></button>
                            <button palabra="cocina"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/l/cocina.jpg')}}" alt=""></button>
                            <button palabra="escalera"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/l/escalera.jpg')}}" alt=""></button>
                            <button palabra="lapiz"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/l/lapiz.jpg')}}" alt=""></button>
                            <button palabra="maleta"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/l/maleta.jpg')}}" alt=""></button>
                            <button palabra="perchero"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/l/perchero.jpg')}}" alt=""></button>
                            <button palabra="radio"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/l/radio.jpg')}}" alt=""></button>
                            <button palabra="loro"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/l/loro.jpg')}}" alt=""></button>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <table id="tablal" class="table tabla-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Eliminar</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <button id="calificarl" class="btn btn-success">Terminar</button>
                <button id="reiniciarl" class="btn btn-warning">Reiniciar</button>
            </div>
            {{-- fin cuarto subitem --}}

            {{-- quinto subitem --}}
            <div class="tab-pane fade" id="ll" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                <div class="col-md-6">
                        <div id="botonesll">
                            <button palabra="ballena"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/ll/ballena.jpg')}}" alt=""></button>
                            <button palabra="barco"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/ll/barco.jpg')}}" alt=""></button>
                            <button palabra="desayuno"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/ll/desayuno.jpg')}}" alt=""></button>
                            <button palabra="despertador"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/ll/despertador.jpg')}}" alt=""></button>
                            <button palabra="gallo"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/ll/gallo.jpg')}}" alt=""></button>
                            <button palabra="llavero"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/ll/llavero.jpg')}}" alt=""></button>
                            <button palabra="vaso"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/ll/vaso.jpg')}}" alt=""></button>
                            <button palabra="lluvia"><img style="height: 75px; width: 75px;" src="{{asset('img/ejercicios/ejercicio1/ll/lluvia.jpg')}}" alt=""></button>

                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <table id="tablall" class="table tabla-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Eliminar</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <button id="calificarll" class="btn btn-success">Terminar</button>
                <button id="reiniciarll" class="btn btn-warning">Reiniciar</button>
            </div>
            {{-- fin quinto subitem --}}
        </div>
    </div>
    <br>
</div>

@stop

@section('js')
    <script>
        let palabras_correctasd = ['dado', 'dinero', 'tenedor','dedo'];
        let palabras_incorrectasd = ['botella', 'foco', 'tijera', 'tomate'];

        $('#tablad').DataTable({
            paging: false,
            searching: false,
            info: false,
            scrollY: '200px',
            scrollCollapse: true
        });

        $('.ordenes').on('click', function(){

            let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            mensaje.rate = 0.8;
            mensaje.text = $(this).parent().text();
            speechSynthesis.speak(mensaje);
        })

        $('#tablad').DataTable().column(2).visible(false)

        document.getElementById('botonesd').addEventListener('click', (e)=>{

            if(e.target.nodeName == 'BUTTON')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('bg-primary');
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('bg-primary');
            }

            if(e.target.nodeName == 'BUTTON' || e.target.nodeName == 'IMG')
            {
                let existe = 0; //no
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.text = (e.target.nodeName == 'BUTTON') ? e.target.getAttribute('palabra') : e.target.parentElement.getAttribute('palabra');
                speechSynthesis.speak(mensaje);

                $('#tablad').DataTable().data()

                for(let i=0; i< $('#tablad').DataTable().data().length; i++)
                {
                    if($('#tablad').DataTable().data()[i][1].includes(mensaje.text))
                    {
                        existe = 1;
                    }
                }

                let ruta_imagen = '{{asset('img/ejercicios/ejercicio1/d/')}}' + '/'+mensaje.text+'.jpg';

                if(existe==0) $('#tablad').DataTable().row.add(['<button class="btn btn-secondary eliminar_dato">-</button>', '<img style="height:70px; width: 70px;" src="'+ruta_imagen+'">', mensaje.text]).draw();
            }

        });

        $('#tablad tbody').on("click", ".eliminar_dato", function()
        {
            for(let i=0; i< document.getElementById('botonesd').children.length; i++)
            {
                [...document.getElementById('botonesd').children].map( e => {
                    if(e.getAttribute('palabra') == $('#tablad').DataTable().row($(this).parents('tr')).data()[2])
                    {
                        e.removeAttribute('disabled');
                        e.classList.remove('bg-primary');
                    }
                })
            }

            $('#tablad').DataTable().row($(this).parents('tr')).remove().draw();
        });

        document.getElementById('calificard').addEventListener('click', ()=>{
            if($('#tablad').DataTable().data().length == 0)
            {
                Swal.fire({
                    title: 'Error',
                    icon: 'error',
                    text: 'No agregó ningún elemento'
                });
            }

            let aciertos = [];
            let erroneos = [];

            for(let i=0; i< $('#tablad').DataTable().data().length; i++)
            {
                if( palabras_correctasd.includes($('#tablad').DataTable().data()[i][2]) )
                {
                    $($('#tablad').DataTable().row(i).node()).addClass('bg-green');
                    aciertos.push($('#tablad').DataTable().data()[i][2])
                }
                else
                {
                    $($('#tablad').DataTable().row(i).node()).addClass('bg-red');
                    erroneos.push($('#tablad').DataTable().data()[i][2]);
                }
            }

            if(aciertos.length == palabras_correctasd.length && erroneos.length == 0)
            {
                Swal.fire({
                    iconHtml: "<img src='{{asset('img/ejercicios/cinco_estrellas.jpg')}}' width='300px' height='100px'>",
                    title: 'Excelente',
                    text:'¡FELICITACIONES, ERES EL MEJOR! NO DEJES DE SEGUIR ESFORZÁNDOTE',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'

                })
            }
            else if(aciertos.length < palabras_correctasd.length && erroneos.length == 0)
            {   
                if(aciertos.length==1){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/una_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(aciertos.length==2){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/segundo_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡NO TE RINDAS! SI SIGUES PRACTICANDO, LO CONSEGUIRÁS' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(aciertos.length==3){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/tres_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡MUY BUEN TRABAJO! SIGUE ASÍ, ESTÁS CERCA DE SER EL MEJOR EN ESTO',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }

            }
            else
            {
                var restante=aciertos.length - erroneos.length;

                if(restante==1){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/una_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==0){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/sin_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==2){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/segundo_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡NO TE RINDAS! SI SIGUES PRACTICANDO, LO CONSEGUIRÁS' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==3){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/tres_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡SIGUE PRACTICANDO! PODRÁS LOGRARLO SI LO INTENTAS Y TE ESFUERZAS MAS.',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else{
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/sin_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })    
                }
            }

        })

        document.getElementById('reiniciard').addEventListener('click', ()=>{
            $('#tablad').DataTable().clear().draw();
            [...document.getElementById('botonesd').children].map( e => {
                e.removeAttribute('disabled');
                e.classList.remove('bg-primary');
            } )
        })
    </script>

    {{-- letra b --}}

    <script>

        document.getElementById('profile-tab').addEventListener('click', ()=>{
            document.getElementById('tablab').removeAttribute('style');
        })
         
        let palabras_correctasb = ['arbol', 'barco', 'embudo','boca'];
        let palabras_incorrectasb = ['auto', 'avion', 'cama', 'telefono'];
        
        $('#tablab').DataTable({
            columnDefs: [
                      { visible: false, targets: 2 }
            ],
            paging: false,
            searching: false,
            info: false,
            scrollY: '200px',
            scrollCollapse: true,

        });

    

        document.getElementById('botonesb').addEventListener('click', (e)=>{

            if(e.target.nodeName == 'BUTTON')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('bg-primary');
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('bg-primary');
            }

            if(e.target.nodeName == 'BUTTON' || e.target.nodeName == 'IMG')
            {
                let existe = 0; //no
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.text = (e.target.nodeName == 'BUTTON') ? e.target.getAttribute('palabra') : e.target.parentElement.getAttribute('palabra');
                speechSynthesis.speak(mensaje);

                $('#tablab').DataTable().data()

                for(let i=0; i< $('#tablab').DataTable().data().length; i++)
                {
                    if($('#tablab').DataTable().data()[i][1].includes(mensaje.text))
                    {
                        existe = 1;
                    }
                }

                let ruta_imagen = '{{asset('img/ejercicios/ejercicio1/b/')}}' + '/'+mensaje.text+'.jpg';

                if(existe==0) $('#tablab').DataTable().row.add(['<button class="btn btn-secondary eliminar_dato">-</button>', '<img style="height:70px; width: 70px;" src="'+ruta_imagen+'">', mensaje.text]).draw();
            }

        });

        $('#tablab tbody').on("click", ".eliminar_dato", function()
        {
            for(let i=0; i< document.getElementById('botonesb').children.length; i++)
            {
                [...document.getElementById('botonesb').children].map( e => {
                    if(e.getAttribute('palabra') == $('#tablab').DataTable().row($(this).parents('tr')).data()[2])
                    {
                        e.removeAttribute('disabled');
                        e.classList.remove('bg-primary');
                    }
                })
            }

            $('#tablab').DataTable().row($(this).parents('tr')).remove().draw();
        });

        document.getElementById('calificarb').addEventListener('click', ()=>{

            if($('#tablab').DataTable().data().length == 0)
            {
                Swal.fire({
                    title: 'Error',
                    icon: 'error',
                    text: 'No agregó ningún elemento'
                });
            }

            let aciertos = [];
            let erroneos = [];

            for(let i=0; i< $('#tablab').DataTable().data().length; i++)
            {
                if( palabras_correctasb.includes($('#tablab').DataTable().data()[i][2]) )
                {
                    $($('#tablab').DataTable().row(i).node()).addClass('bg-green');
                    aciertos.push($('#tablab').DataTable().data()[i][2])
                }
                else
                {
                    $($('#tablab').DataTable().row(i).node()).addClass('bg-red');
                    erroneos.push($('#tablab').DataTable().data()[i][2]);
                }
            }

            if(aciertos.length == palabras_correctasb.length && erroneos.length == 0)
            {
                Swal.fire({
                    iconHtml: "<img src='{{asset('img/ejercicios/cinco_estrellas.jpg')}}' width='300px' height='100px'>",
                    title: 'Excelente',
                    text:'¡FELICITACIONES, ERES EL MEJOR! NO DEJES DE SEGUIR ESFORZÁNDOTE',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'

                })
            }
            else if(aciertos.length < palabras_correctasb.length && erroneos.length == 0)
            {   
                if(aciertos.length==1){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/una_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(aciertos.length==2){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/segundo_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡NO TE RINDAS! SI SIGUES PRACTICANDO, LO CONSEGUIRÁS' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(aciertos.length==3){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/tres_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡MUY BUEN TRABAJO! SIGUE ASÍ, ESTÁS CERCA DE SER EL MEJOR EN ESTO',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }

            }
            else
            {
                var restante=aciertos.length - erroneos.length;

                if(restante==1){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/una_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==0){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/sin_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==2){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/segundo_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡NO TE RINDAS! SI SIGUES PRACTICANDO, LO CONSEGUIRÁS' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==3){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/tres_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡SIGUE PRACTICANDO! PODRÁS LOGRARLO SI LO INTENTAS Y TE ESFUERZAS MAS.',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else{
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/sin_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })    
                }
            }

        })

        document.getElementById('reiniciarb').addEventListener('click', ()=>{
            $('#tablab').DataTable().clear().draw();
            [...document.getElementById('botonesb').children].map( e => {
                e.removeAttribute('disabled');
                e.classList.remove('bg-primary');
            } )
        })  
    </script>

    {{-- letra q --}}
    <script>
        document.getElementById('contact-tab').addEventListener('click', ()=>{
            document.getElementById('tablaq').removeAttribute('style');
            document.getElementById('tablal').removeAttribute('style');
            document.getElementById('tablall').removeAttribute('style');
        })

        let palabras_correctasq = ['peluquero', 'queso', 'quimico', 'mariquita'];
        let palabras_incorrectasq = ['bicicleta', 'botella', 'computadora', 'disco', 'zapato',];
        $('#tablaq').DataTable({
            columnDefs: [
                      { visible: false, targets: 2 }
            ],
            paging: false,
            searching: false,
            info: false,
            scrollY: '200px',
            scrollCollapse: true
        });

        $('#tablaq').DataTable().column(2).visible(false)

        
        document.getElementById('botonesq').addEventListener('click', (e)=>{

            if(e.target.nodeName == 'BUTTON')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('bg-primary');
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('bg-primary');
            }

            if(e.target.nodeName == 'BUTTON' || e.target.nodeName == 'IMG')
            {
                let existe = 0; //no
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.text = (e.target.nodeName == 'BUTTON') ? e.target.getAttribute('palabra') : e.target.parentElement.getAttribute('palabra');
                speechSynthesis.speak(mensaje);

                for(let i=0; i< $('#tablaq').DataTable().data().length; i++)
                {
                    if($('#tablaq').DataTable().data()[i][1].includes(mensaje.text))
                    {
                        existe = 1;
                    }
                }

                let ruta_imagen = '{{asset('img/ejercicios/ejercicio1/q/')}}' + '/'+mensaje.text+'.jpg';

                if(existe==0) $('#tablaq').DataTable().row.add(['<button class="btn btn-secondary eliminar_dato">-</button>', '<img style="height:70px; width: 70px;" src="'+ruta_imagen+'">', mensaje.text]).draw();
            }

        });

        $('#tablaq tbody').on("click", ".eliminar_dato", function()
        {
            for(let i=0; i< document.getElementById('botonesq').children.length; i++)
            {
                [...document.getElementById('botonesq').children].map( e => {
                    if(e.getAttribute('palabra') == $('#tablaq').DataTable().row($(this).parents('tr')).data()[2])
                    {
                        e.removeAttribute('disabled');
                        e.classList.remove('bg-primary');
                    }
                })
            }

            $('#tablaq').DataTable().row($(this).parents('tr')).remove().draw();
        });

        document.getElementById('calificarq').addEventListener('click', ()=>{

            if($('#tablaq').DataTable().data().length == 0)
            {
                Swal.fire({
                    title: 'Error',
                    icon: 'error',
                    text: 'No agregó ningún elemento'
                });
            }

            let aciertos = [];
            let erroneos = [];

            for(let i=0; i< $('#tablaq').DataTable().data().length; i++)
            {
                if( palabras_correctasq.includes($('#tablaq').DataTable().data()[i][2]) )
                {
                    $($('#tablaq').DataTable().row(i).node()).addClass('bg-green');
                    aciertos.push($('#tablaq').DataTable().data()[i][2])
                }
                else
                {
                    $($('#tablaq').DataTable().row(i).node()).addClass('bg-red');
                    erroneos.push($('#tablaq').DataTable().data()[i][2]);
                }
            }

            if(aciertos.length == palabras_correctasq.length && erroneos.length == 0)
            {
                Swal.fire({
                    iconHtml: "<img src='{{asset('img/ejercicios/cinco_estrellas.jpg')}}' width='300px' height='100px'>",
                    title: 'Excelente',
                    text:'¡FELICITACIONES, ERES EL MEJOR! NO DEJES DE SEGUIR ESFORZÁNDOTE',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'

                })
            }
            else if(aciertos.length < palabras_correctasq.length && erroneos.length == 0)
            {   
                if(aciertos.length==1){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/una_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(aciertos.length==2){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/segundo_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡NO TE RINDAS! SI SIGUES PRACTICANDO, LO CONSEGUIRÁS' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(aciertos.length==3){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/tres_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡MUY BUEN TRABAJO! SIGUE ASÍ, ESTÁS CERCA DE SER EL MEJOR EN ESTO',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }

            }
            else
            {
                var restante=aciertos.length - erroneos.length;

                if(restante==1){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/una_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==0){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/sin_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==2){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/segundo_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡NO TE RINDAS! SI SIGUES PRACTICANDO, LO CONSEGUIRÁS' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==3){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/tres_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡SIGUE PRACTICANDO! PODRÁS LOGRARLO SI LO INTENTAS Y TE ESFUERZAS MAS.',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else{
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/sin_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })    
                }
            }
        })

        document.getElementById('reiniciarq').addEventListener('click', ()=>{
            $('#tablaq').DataTable().clear().draw();
            [...document.getElementById('botonesq').children].map( e => {
                e.removeAttribute('disabled');
                e.classList.remove('bg-primary');
            })
        })
    </script>

    {{-- letra l --}}
    <script>

        let palabras_correctasl = ['escalera', 'lapiz', 'maleta','loro'];
        let palabras_incorrectasl = ['casa', 'cocina','perchero', 'radio'];
        $('#tablal').DataTable({
            columnDefs: [
                      { visible: false, targets: 2 }
            ],
            paging: false,
            searching: false,
            info: false,
            scrollY: '200px',
            scrollCollapse: true
        });

        $('#tablal').DataTable().column(2).visible(false)

        document.getElementById('botonesl').addEventListener('click', (e)=>{

            if(e.target.nodeName == 'BUTTON')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('bg-primary');
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('bg-primary');
            }

            if(e.target.nodeName == 'BUTTON' || e.target.nodeName == 'IMG')
            {
                let existe = 0; //no
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.text = (e.target.nodeName == 'BUTTON') ? e.target.getAttribute('palabra') : e.target.parentElement.getAttribute('palabra');
                speechSynthesis.speak(mensaje);

                for(let i=0; i< $('#tablal').DataTable().data().length; i++)
                {
                    if($('#tablal').DataTable().data()[i][1].includes(mensaje.text))
                    {
                        existe = 1;
                    }
                }

                let ruta_imagen = '{{asset('img/ejercicios/ejercicio1/l/')}}' + '/'+mensaje.text+'.jpg';

                if(existe==0) $('#tablal').DataTable().row.add(['<button class="btn btn-secondary eliminar_dato">-</button>', '<img style="height:70px; width: 70px;" src="'+ruta_imagen+'">', mensaje.text]).draw();
            }

        });

        $('#tablal tbody').on("click", ".eliminar_dato", function()
        {
            for(let i=0; i< document.getElementById('botonesl').children.length; i++)
            {
                [...document.getElementById('botonesl').children].map( e => {
                    if(e.getAttribute('palabra') == $('#tablal').DataTable().row($(this).parents('tr')).data()[2])
                    {
                        e.removeAttribute('disabled');
                        e.classList.remove('bg-primary');
                    }
                })
            }

            $('#tablal').DataTable().row($(this).parents('tr')).remove().draw();
        });

        document.getElementById('calificarl').addEventListener('click', ()=>{

            if($('#tablal').DataTable().data().length == 0)
            {
                Swal.fire({
                    title: 'Error',
                    icon: 'error',
                    text: 'No agregó ningún elemento'
                });
            }

            let aciertos = [];
            let erroneos = [];

            for(let i=0; i< $('#tablal').DataTable().data().length; i++)
            {
                if( palabras_correctasl.includes($('#tablal').DataTable().data()[i][2]) )
                {
                    $($('#tablal').DataTable().row(i).node()).addClass('bg-green');
                    aciertos.push($('#tablal').DataTable().data()[i][2])
                }
                else
                {
                    $($('#tablal').DataTable().row(i).node()).addClass('bg-red');
                    erroneos.push($('#tablal').DataTable().data()[i][2]);
                }
            }

            if(aciertos.length == palabras_correctasl.length && erroneos.length == 0)
            {
                Swal.fire({
                    iconHtml: "<img src='{{asset('img/ejercicios/cinco_estrellas.jpg')}}' width='300px' height='100px'>",
                    title: 'Excelente',
                    text:'¡FELICITACIONES, ERES EL MEJOR! NO DEJES DE SEGUIR ESFORZÁNDOTE',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'

                })
            }
            else if(aciertos.length < palabras_correctasl.length && erroneos.length == 0)
            {   
                if(aciertos.length==1){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/una_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(aciertos.length==2){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/segundo_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡NO TE RINDAS! SI SIGUES PRACTICANDO, LO CONSEGUIRÁS' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(aciertos.length==3){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/tres_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡MUY BUEN TRABAJO! SIGUE ASÍ, ESTÁS CERCA DE SER EL MEJOR EN ESTO',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }

            }
            else
            {
                var restante=aciertos.length - erroneos.length;

                if(restante==1){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/una_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==0){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/sin_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==2){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/segundo_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡NO TE RINDAS! SI SIGUES PRACTICANDO, LO CONSEGUIRÁS' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==3){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/tres_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡SIGUE PRACTICANDO! PODRÁS LOGRARLO SI LO INTENTAS Y TE ESFUERZAS MAS.',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else{
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/sin_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })    
                }
            }

        })

        document.getElementById('reiniciarl').addEventListener('click', ()=>{
            $('#tablal').DataTable().clear().draw();
            [...document.getElementById('botonesl').children].map( e => {
                e.removeAttribute('disabled');
                e.classList.remove('bg-primary');
            })
        })
    </script>

    {{-- letra ll --}}
    <script>
        let palabras_correctasll = ['ballena', 'gallo', 'llavero','lluvia'];
        let palabras_incorrectasll = ['barco', 'desayuno', 'despertador', 'vaso'];
        $('#tablall').DataTable({
            columnDefs: [
                      { visible: false, targets: 2 }
            ],
            paging: false,
            searching: false,
            info: false,
            scrollY: '200px',
            scrollCollapse: true
        });

        $('#tablall').DataTable().column(2).visible(false)



        document.getElementById('botonesll').addEventListener('click', (e)=>{

            if(e.target.nodeName == 'BUTTON')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('bg-primary');
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('bg-primary');
            }

            if(e.target.nodeName == 'BUTTON' || e.target.nodeName == 'IMG')
            {
                let existe = 0; //no
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.text = (e.target.nodeName == 'BUTTON') ? e.target.getAttribute('palabra') : e.target.parentElement.getAttribute('palabra');
                speechSynthesis.speak(mensaje);

                for(let i=0; i< $('#tablall').DataTable().data().length; i++)
                {
                    if($('#tablall').DataTable().data()[i][1].includes(mensaje.text))
                    {
                        existe = 1;
                    }
                }

                let ruta_imagen = '{{asset('img/ejercicios/ejercicio1/ll/')}}' + '/'+mensaje.text+'.jpg';

                if(existe==0) $('#tablall').DataTable().row.add(['<button class="btn btn-secondary eliminar_dato">-</button>', '<img style="height:70px; width: 70px;" src="'+ruta_imagen+'">', mensaje.text]).draw();
            }

        });

        $('#tablall tbody').on("click", ".eliminar_dato", function()
        {
            for(let i=0; i< document.getElementById('botonesll').children.length; i++)
            {
                [...document.getElementById('botonesll').children].map( e => {
                    if(e.getAttribute('palabra') == $('#tablall').DataTable().row($(this).parents('tr')).data()[2])
                    {
                        e.removeAttribute('disabled');
                        e.classList.remove('bg-primary');
                    }
                })
            }

            $('#tablall').DataTable().row($(this).parents('tr')).remove().draw();
        });

        document.getElementById('calificarll').addEventListener('click', ()=>{

            if($('#tablall').DataTable().data().length == 0)
            {
                Swal.fire({
                    title: 'Error',
                    icon: 'error',
                    text: 'No agregó ningún elemento'
                });
            }

            let aciertos = [];
            let erroneos = [];

            for(let i=0; i< $('#tablall').DataTable().data().length; i++)
            {
                if( palabras_correctasll.includes($('#tablall').DataTable().data()[i][2]) )
                {
                    $($('#tablall').DataTable().row(i).node()).addClass('bg-green');
                    aciertos.push($('#tablall').DataTable().data()[i][2])
                }
                else
                {
                    $($('#tablall').DataTable().row(i).node()).addClass('bg-green');
                    erroneos.push($('#tablall').DataTable().data()[i][2]);
                }
            }

            if(aciertos.length == palabras_correctasll.length && erroneos.length == 0)
            {
                Swal.fire({
                    iconHtml: "<img src='{{asset('img/ejercicios/cinco_estrellas.jpg')}}' width='300px' height='100px'>",
                    title: 'Excelente',
                    text:'¡FELICITACIONES, ERES EL MEJOR! NO DEJES DE SEGUIR ESFORZÁNDOTE',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'

                })
            }
            else if(aciertos.length < palabras_correctasll.length && erroneos.length == 0)
            {   
                if(aciertos.length==1){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/una_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(aciertos.length==2){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/segundo_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡NO TE RINDAS! SI SIGUES PRACTICANDO, LO CONSEGUIRÁS' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(aciertos.length==3){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/tres_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Por poco lo logras',
                        text:'¡MUY BUEN TRABAJO! SIGUE ASÍ, ESTÁS CERCA DE SER EL MEJOR EN ESTO',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }

            }
            else
            {
                var restante=aciertos.length - erroneos.length;

                if(restante==1){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/una_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==0){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/sin_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==2){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/segundo_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡NO TE RINDAS! SI SIGUES PRACTICANDO, LO CONSEGUIRÁS' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else if(restante==3){
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/tres_estrella_media.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡SIGUE PRACTICANDO! PODRÁS LOGRARLO SI LO INTENTAS Y TE ESFUERZAS MAS.',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                }else{
                    Swal.fire({
                        iconHtml: "<img src='{{asset('img/ejercicios/sin_estrella.jpg')}}' width='300px' height='100px'>",
                        title: 'Fallaste',
                        text:'¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR' ,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })    
                }
            }
        })

        document.getElementById('reiniciarll').addEventListener('click', ()=>{
            $('#tablall').DataTable().clear().draw();
            [...document.getElementById('botonesll').children].map( e => {
                e.removeAttribute('disabled');
                e.classList.remove('bg-primary');
            } )
        })
    </script>

@endsection