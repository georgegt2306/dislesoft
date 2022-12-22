@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 2</b></h1>
@stop

@section('css')
    <style>
        .imagenes-ejercicio2
        {
            height: 65px; width: 60px;
        }

        .botones
        {
            padding: 8px;
            border-color: #140202;
            border-width: 2px;
            border-style: solid;
        }

        a.disabled {
            color: gray;
            pointer-events: none;
        }

    </style>
@stop

@section('plugins.Select2', true)

@section('content')

<div class="card card-primary card-outline">
    <div class="card-header bg-primary">
        <h2><i class="fas fa-edit"></i>  SELECCIONE LA LETRA QUE QUIERE PRACTICAR <button class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}" alt=""></button></h2>
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
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#c" role="tab" aria-controls="contact" aria-selected="false"><h2><b>c</b></h2></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#p" role="tab" aria-controls="contact" aria-selected="false"><h2><b>p</b></h2></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#q" role="tab" aria-controls="contact" aria-selected="false"><h2><b>q</b></h2></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#f" role="tab" aria-controls="contact" aria-selected="false"><h2><b>f</b></h2></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#t" role="tab" aria-controls="contact" aria-selected="false"><h2><b>t</b></h2></a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            {{-- primer subitem --}}
            <div class="tab-pane fade show active" id="d" role="tabpanel" aria-labelledby="home-tab">
            <br><br>    
            <div class="row">
                <div class="col-md-5">
                    <div class="col-md-12" style="height:60px">
                        <h5>ENCUENTRA Y DALE CLICK A LA LETRA "d"</h5>
                    </div>
                <div id="botonesd" class="row botones"></div>
                <br>
                <button class="btn btn-primary" id="calificarbotonesd">Terminar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-5">
                <div class="col-md-12" style="height:60px">
                    <h5>ENCUENTRA Y DALE CLICK A LAS SILABAS CORRESPONDIENTES A LA LETRA "d"</h5></div>
                    <div id="botonesdsilaba" class="row botones"></div>
                    <br>
                    <button class="btn btn-primary" id="calificarbotonesdsilaba">Terminar</button>
                    <button class="btn btn-warning reiniciar">Reiniciar</button>
                    </div>
                </div>
                <div class="col-md-12">
                <br>
                    <h5 id="modelod_palabra">ENCUENTRA Y SELECCIONA LA PALABRA:</h5>
                    
                    <div class="row">
                        <div id="botonesdpalabra" class="col-md-8 botones"></div>
                        
                        <div class="col-md-4" style="display: block;text-align:center; margin:0" >
                            <img id="modelod" style="height: 220px; width:220px; border-radius:40px">
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-primary" id="calificarbotonesdpalabra">Terminar</button>
                    <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div>
            </div>
            {{-- fin primer subitem --}}

            {{-- segundo subitem --}}
            <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="profile-tab">
            <br><br>
            <div class="row">
                <div class="col-md-5">
                    <div class="col-md-12" style="height:60px">
                        <h5>ENCUENTRA Y DALE CLICK A LA LETRA "b"</h5>
                    </div>
                <div id="botonesb" class="row botones"></div>
                <br>
                <button class="btn btn-primary" id="calificarbotonesb">Terminar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-5">
                    <div class="col-md-12" style="height:60px">
                        <h5>ENCUENTRA Y DALE CLICK A LAS SILABAS CORRESPONDIENTES A LA LETRA "b"</h5>
                    </div>
                    <div id="botonesbsilaba" class="row botones"></div>
                    <br>
                <button class="btn btn-primary" id="calificarbotonesbsilaba">Terminar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div>
                </div>
                
                <div class="col-md-12">
                <br>
                <h5 id="modelob_palabra">ENCUENTRA Y SELECCIONA LA PALABRA:</h5>
                <br>
                <div class="row">
                    <div id="botonesbpalabra" class="col-md-8 botones"></div>
                    <div class="col-md-4" style="display: block;text-align:center; margin:0" >
                        <img id="modelob" style="height: 220px; width:220px;border-radius:40px">
                    </div>
                </div>
                <br>
                <button class="btn btn-primary" id="calificarbotonesbpalabra">Terminar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div>
            </div>
            {{-- fin segundo subitem --}}

            {{-- tercer subitem --}}
            <div class="tab-pane fade" id="c" role="tabpanel" aria-labelledby="contact-tab">
            <br><br>
            <div class="row">
                <div class="col-md-5">
                    <div class="col-md-12" style="height:60px">
                        <h5>ENCUENTRA Y DALE CLICK A LA LETRA "c"</h5>
                        
                    </div>
                <div id="botonesc" class="row botones"></div>
                <br>
                <button class="btn btn-primary" id="calificarbotonesc">Terminar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
                
                </div>
                <div class="col-md-1">
                </div>   
                <div class="col-md-5">
                    <div class="col-md-12" style="height:60px">
                    <h4>ENCUENTRA Y DALE CLICK A LAS SILABAS CORRESPONDIENTES A LA LETRA "c"</h4>
                    </div> 
                    <div id="botonescsilaba" class="row botones"></div>
                    <br>
                    <button class="btn btn-primary" id="calificarbotonescsilaba">Terminar</button>
                    <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div>
            </div>

            <div class="col-md-12">
                <br>
                <h4 id="modeloc_palabra">ENCUENTRA Y SELECCIONA LA PALABRA:</h4>
                <br>
                <div class="row">
                    <div id="botonescpalabra" class="col-md-8 botones"></div>
                    <div class="col-md-4" style="display: block;text-align:center; margin:0" >
                        <img id="modeloc" style="height: 220px; width:220px;border-radius:40px">
                    </div>
                </div>
                
                <br>
                <button class="btn btn-primary" id="calificarbotonescpalabra">Terminar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
            </div>
            </div>
            {{-- fin tercer subitem --}}

            {{-- cuarto subitem --}}
            <div class="tab-pane fade" id="p" role="tabpanel" aria-labelledby="contact-tab">
                <br><br>
                <div class="row">
                    <div class="col-md-5">
                        <div class="col-md-12" style="height:60px">
                            <h5>ENCUENTRA Y DALE CLICK A LA LETRA "p" </h5>
                        </div>
                        <div id="botonesp" class="row botones"></div>
                    <br>
                    <button class="btn btn-primary" id="calificarbotonesp">Terminar</button>
                    <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div>
                <div class="col-md-1">
                </div>  
                <div class="col-md-5">
                    <div class="col-md-12" style="height:60px">
                        <h5>ENCUENTRA Y DALE CLICK A LAS SILABAS CORRESPONDIENTES A LA LETRA "p"</h5>
                    </div>
                    <div id="botonespsilaba" class="row botones"></div>
                    <br>
                    <button class="btn btn-primary" id="calificarbotonespsilaba">Terminar</button>
                    <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div>
                </div>
                <div class="col-md-12">
                <br>
                <h4 id="modelop_palabra">ENCUENTRA Y SELECCIONA LA PALABRA:</h4>
                <br>
                <div class="row">
                    <div id="botonesppalabra" class="col-md-8 botones"></div>
                    <div class="col-md-4" style="display: block;text-align:center; margin:0" >
                        <img id="modelop" style="height: 220px; width:220px;border-radius:40px">
                    </div>
                </div>
                <br>
                <button class="btn btn-primary" id="calificarbotonesppalabra">Terminar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div>
            </div>
            {{-- fin cuarto subitem --}}

            {{-- quinto subitem --}}
            <div class="tab-pane fade" id="q" role="tabpanel" aria-labelledby="contact-tab">
            <br><br>
            <div class="row">
                <div class="col-md-5">
                    <div class="col-md-12" style="height:60px">
                        <h5>ENCUENTRA Y DALE CLICK A LA LETRA "q"</h5>
                    </div>
                    <div id="botonesq" class="row botones"></div>
                    <br>
                    <button class="btn btn-primary" id="calificarbotonesq">Terminar</button>
                    <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div>    
                <div class="col-md-1">
                </div>
                <div class="col-md-5">
                        <div class="col-md-12" style="height:60px">
                            <h5>ENCUENTRA Y DALE CLICK A LAS SILABAS CORRESPONDIENTES A LA LETRA "q"</h5>
                        </div>
                        <div id="botonesqsilaba" class="row botones"></div>
                          
                        <br>
                        <button class="btn btn-primary" id="calificarbotonesqsilaba">Terminar</button>
                        <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div> 
            </div> 
                <div class="col-md-12">
                    <br>
                        <h4 id="modeloq_palabra">ENCUENTRA Y SELECCIONA LA PALABRA:</h4>
                    <br>
                    <div class="row">
                        <div id="botonesqpalabra" class="col-md-8 botones"></div>
                        <div class="col-md-4" style="display: block;text-align:center; margin:0" >
                            <img id="modeloq" style="height: 220px; width:220px;border-radius:40px">
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-primary" id="calificarbotonesqpalabra">Terminar</button>
                    <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div>
            </div>
            {{-- fin quinto subitem --}}

            {{-- sexto subitem --}}
            <div class="tab-pane fade" id="f" role="tabpanel" aria-labelledby="contact-tab">
            <br><br>
            <div class="row">
                <div class="col-md-5">
                    <div class="col-md-12" style="height:60px">
                        <h5>ENCUENTRA Y DALE CLICK A LA LETRA "f"</h5>
                    </div>
                    <div id="botonesf" class="row botones"></div>

                <br>
                <button class="btn btn-primary" id="calificarbotonesf">Terminar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-5">
                    <div class="col-md-12" style="height:60px">
                        <h5>ENCUENTRA Y DALE CLICK A LAS SILABAS CORRESPONDIENTES A LA LETRA "f"</h4>
                    </div>
                    <div id="botonesfsilaba" class="row botones"></div>
                    <br>
                    <button class="btn btn-primary" id="calificarbotonesfsilaba">Terminar</button>
                    <button class="btn btn-warning reiniciar">Reiniciar</button>                
                </div>
            </div>
            <div class="col-md-12">
                <br>
                <h4 id="modelof_palabra">ENCUENTRA Y SELECCIONA LA PALABRA:</h4>
                <br>
                <div class="row">
                    <div id="botonesfpalabra" class="col-md-8 botones"></div>
                    <div class="col-md-4" style="display: block;text-align:center; margin:0" >
                            <img id="modelof" style="height: 220px; width:220px;border-radius:40px">
                        </div>
                </div>
                <br>
                <button class="btn btn-primary" id="calificarbotonesfpalabra">Terminar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
            </div>
            </div>
            {{-- fin sexto subitem --}}

            {{-- septimo subitem --}}
            <div class="tab-pane fade" id="t" role="tabpanel" aria-labelledby="contact-tab">
            <br><br>
            <div class="row">
                <div class="col-md-5">
                    <div class="col-md-12" style="height:60px">
                        <h5>ENCUENTRA Y DALE CLICK A LA LETRA "t"</h5>
                    </div>
                <div id="botonest" class="row botones"></div>
                <br>
                <button class="btn btn-primary" id="calificarbotonest">Terminar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-5">
                    <div class="col-md-12" style="height:60px">
                        <h5>ENCUENTRA Y DALE CLICK A LAS SILABAS CORRESPONDIENTES A LA LETRA "t"</h5>
                        </div>
                <div id="botonestsilaba" class="row botones"></div>
                <br>
                <button class="btn btn-primary" id="calificarbotonestsilaba">Terminar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
                <br>
                </div>
                </div>

                <div class="col-md-12">
                <br>
                <h4 id="modelot_palabra">ENCUENTRA Y SELECCIONA LA PALABRA:</h4>
                <br>
                    <div class="row">
                    <div id="botonestpalabra" class="col-md-8 botones"></div>
                    <div class="col-md-4" style="display: block;text-align:center; margin:0" >
                            <img id="modelot" style="height: 220px; width:220px;border-radius:40px">
                        </div>
                </div>
                <br>
                <button class="btn btn-primary" id="calificarbotonestpalabra">Terminar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
            </div>
            </div>
            {{-- fin septimo subitem --}}
        </div>
    </div>
    <br>
</div>

@stop

@section('js')

    {{-- script general --}}
    <script>
        $('.reiniciar').on('click', ()=>{

            window.location.reload();

        })

        $('.ordenes').on('click', function(){

            let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            mensaje.rate = 0.8;
            mensaje.text = $(this).parent().text();
            speechSynthesis.speak(mensaje);
        })
    </script>
    {{-- Fin script general --}}

    {{-- letra d --}}
    <script>
        //inicio letras d
        let letrasd = ['q', 's', 'b', 'p', 't', 'l', 'm', 'd', 'b', 'g'];
        let correctasd = ['d'];

        if(Math.floor(Math.random()*10) > 5)
        {
            letrasd.sort();
        }

        for (let i = 0; i < 10; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                letrasd.unshift(letrasd[Math.floor(Math.random()*10)]);
            }
            else
            {
                letrasd.push(letrasd[Math.floor(Math.random()*10)]);
            }
        }

        for(let i=0; i<letrasd.length; i++)
        {
            let button = document.createElement('a');
            let button2 = document.createElement('button');
            button.setAttribute('palabra', letrasd[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "60px";
            button.style.border = "1px black solid";
            button.text =  letrasd[i];

            document.getElementById('botonesd').append(button);
        }

        document.getElementById('botonesd').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            */
            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonesd').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesd').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctasd.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctasd.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })
        //fin letras

        //inicio silabas
        let silabasd = ['qu', 'te', 'bu', 'do', 'du', 'di', 'da', 'de', 'gu', 'la', 'pu', 'ab', 'bi', 'ub'];
        let correctassilabasd = ['da', 'de', 'di', 'do', 'du'];

        if(Math.floor(Math.random()*10) > 5)
        {
            silabasd.sort();
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                silabasd.unshift(silabasd[Math.floor(Math.random()*10)]);
            }
            else
            {
                silabasd.push(silabasd[Math.floor(Math.random()*10)]);
            }
        }

        for(let i=0; i<silabasd.length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', silabasd[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.width = "60px";
            button.style.fontSize = "20px";
            button.style.border = "1px black solid";
            
            button.text =  silabasd[i];

            document.getElementById('botonesdsilaba').append(button);
        }

        document.getElementById('botonesdsilaba').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonesdsilaba').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesdsilaba').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctassilabasd.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctassilabasd.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })

        //fin silabas

        //inicio palabra
        let modelosd = ['dado', 'dedo', 'delfin', 'disco', 'doctor'];
        let palabrasd = {"dedo": ['bebo', 'bedo', 'dado', 'debo', 'dedo', 'abeb', 'deldo', 'depo', 'dido', 'dode', 'duedo', 'gedo'], "dado": ['baba', 'babo', 'bado', 'bebe', 'boda', 'dada', 'dado', 'dedo', 'depe', 'gaba', 'qipe', 'qopa'], "delfin": ['baltin', 'belfin', 'belfyn', 'delfin', 'dalton', 'dellfin', 'betfin', 'deltin', 'depe', 'detfin', 'pelon', 'qaltin'], "disco": ['besca', 'bisco', 'bisno', 'bizvo', 'dede', 'disco', 'disvo', 'disxo', 'dixco', 'jisno', 'listo', 'qisno'], "doctor": ['bartac', 'boctor', 'daclor', 'dactor', 'doclor', 'doctor', 'dorlor', 'lactar', 'loctor', 'toclor', 'tordoc', 'tractor']}

        let modelo_elegidod = modelosd[Math.floor(Math.random()*5)];

        document.getElementById('modelod').setAttribute('src', `{{asset('img/ejercicios/ejercicio2/palabras/modelos/d/')}}/${modelo_elegidod}.jpg`)
        document.getElementById('modelod').setAttribute('palabra', modelo_elegidod)
        document.getElementById('modelod_palabra').textContent = `${document.getElementById('modelod_palabra').textContent} ${modelo_elegidod}`;

        document.getElementById('modelod').addEventListener('click', (e)=>{

            let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            mensaje.rate = 0.8;
            mensaje.text = e.target.getAttribute('palabra');
            speechSynthesis.speak(mensaje);

        })

        if(Math.floor(Math.random()*10) > 5)
        {
            palabrasd[modelo_elegidod].sort();
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                palabrasd[modelo_elegidod].unshift(palabrasd[modelo_elegidod][Math.floor(Math.random()*palabrasd[modelo_elegidod].length)]);
            }
            else
            {
                palabrasd[modelo_elegidod].push(palabrasd[modelo_elegidod][Math.floor(Math.random()*palabrasd[modelo_elegidod].length)]);
            }
        }

        for(let i=0; i<palabrasd[modelo_elegidod].length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', palabrasd[modelo_elegidod][i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.border = "1px black solid";
            button.style.width = "100px";
            button.text =  palabrasd[modelo_elegidod][i];
            document.getElementById('botonesdpalabra').append(button);
        }

        document.getElementById('botonesdpalabra').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        });

        document.getElementById('calificarbotonesdpalabra').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesdpalabra').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(e.getAttribute('palabra') == modelo_elegidod)
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && e.getAttribute('palabra') == modelo_elegidod)
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })

        //fin palabra
    </script>
    {{-- fin letra d --}}


    {{-- Inicio letra b --}}
    <script>
        //inicio letras
        let letrasb = ['a', 'z', 'd', 'e', 'l', 's', 'p', 'q', 'm', 'g', 'v', 'b'];
        let correctasb = ['b'];

        if(Math.floor(Math.random()*10) > 5)
        {
            letrasb.sort();
        }

        for (let i = 0; i < 8; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                letrasb.unshift(letrasb[Math.floor(Math.random()*10)]);
            }
            else
            {
                letrasb.push(letrasb[Math.floor(Math.random()*10)]);
            }
        }

        for(let i=0; i<letrasb.length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', letrasb[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "60px";
            button.style.border = "1px black solid";
            button.text =  letrasb[i];
            
            document.getElementById('botonesb').append(button);
        }

        document.getElementById('botonesb').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonesb').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesb').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctasb.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctasb.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })
        //fin letras

        //inicio silabas
        let silabasb = ['ab', 'ad', 'ba', 'be', 'bi', 'bo', 'di', 'dy', 'ga', 'la', 'qa', 'qu',  'ub', 'ud'];
        let correctassilabasb = ['ba', 'be', 'bi', 'bo', 'bu'];

        if(Math.floor(Math.random()*10) > 5)
        {
            silabasb.sort();
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                silabasb.unshift(silabasb[Math.floor(Math.random()*10)]);
            }
            else
            {
                silabasb.push(silabasb[Math.floor(Math.random()*10)]);
            }
        }

        for(let i=0; i<silabasb.length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', silabasb[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "60px";
            button.style.border = "1px black solid";
            button.text =  silabasb[i];
            document.getElementById('botonesbsilaba').append(button);
        }

        document.getElementById('botonesbsilaba').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonesbsilaba').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesbsilaba').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctassilabasb.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctassilabasb.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        });
        //fin silabas

        //inicio palabra
        let modelosb = ['barco', 'bebe', 'billete', 'bota', 'botón'];
        let palabrasb = {"bebe": ['bado', 'bebo', 'bede', 'debo', 'dede', 'depe', 'gebe', 'gedo', 'gege', 'pepe', 'qepe', 'qipe'], "barco": ['barno', 'barco', 'darco', 'darno', 'dirco', 'doxco', 'durno', 'lacta', 'lacteo', 'qarcu', 'tacto', 'torso'], "billete": ['billete', 'dellete', 'dillete', 'filete', 'fillete', 'gerente', 'grillete', 'jitile', 'pilate', 'pileta', 'pillo', 'quinto', 'tolete'], "bota": ['bato', 'bela', 'bota', 'dabo', 'dado', 'dato', 'dedo', 'dota', 'jota', 'lola', 'luto', 'pato', 'qebo'], "botón": ['botón', 'botox', 'dalto', 'daton', 'doton', 'dulto', 'gloton', 'lector', 'lotan', 'portan', 'quasco', 'queso', 'tacto']};

        let modelo_elegidob = modelosb[Math.floor(Math.random()*5)];

        document.getElementById('modelob').setAttribute('src', `{{asset('img/ejercicios/ejercicio2/palabras/modelos/b/')}}/${modelo_elegidob}.jpg`)
        document.getElementById('modelob_palabra').textContent = `${document.getElementById('modelob_palabra').textContent} ${modelo_elegidob}`;

        if(Math.floor(Math.random()*10) > 5)
        {
            palabrasb[modelo_elegidob].sort();
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                palabrasb[modelo_elegidob].unshift(palabrasb[modelo_elegidob][Math.floor(Math.random()*palabrasb[modelo_elegidob].length)]);
            }
            else
            {
                palabrasb[modelo_elegidob].push(palabrasb[modelo_elegidob][Math.floor(Math.random()*palabrasb[modelo_elegidob].length)]);
            }
        }

        for(let i=0; i<palabrasb[modelo_elegidob].length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', palabrasb[modelo_elegidob][i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "100px";
            button.style.border = "1px black solid";
            button.text =  palabrasb[modelo_elegidob][i];
            document.getElementById('botonesbpalabra').append(button);
        }

        document.getElementById('botonesbpalabra').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonesbpalabra').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesbpalabra').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(e.getAttribute('palabra') == modelo_elegidob)
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && e.getAttribute('palabra') == modelo_elegidob)
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })

        //fin palabra
    </script>
    {{-- Fin letra b --}}

    {{-- letra c --}}
    <script>
        //inicio letras
        let letrasc = ['z', 'v', 'a', 'u', 't', 'p', 'q', 'r','c','o', 'g', 'h', 'a'];
        let correctasc = ['c'];

        if(Math.floor(Math.random()*10) > 5)
        {
            letrasc.sort();
        }

        for (let i = 0; i < 10; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                letrasc.unshift(letrasc[Math.floor(Math.random()*10)]);
            }
            else
            {
                letrasc.push(letrasc[Math.floor(Math.random()*10)]);
            }
        }

        for(let i=0; i<letrasc.length; i++)
        {
            let button = document.createElement('a');
            let button2 = document.createElement('button');
            button.setAttribute('palabra', letrasc[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "60px";
            button.style.border = "1px black solid";
            button.text =  letrasc[i];
            document.getElementById('botonesc').append(button);
        }

        document.getElementById('botonesc').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            */
            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonesc').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesc').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctasc.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctasc.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })
        //fin letras

        //inicio silabas
        let silabasc = ['be', 'ca', 'ce', 'ci', 'oc', 'co', 'ac', 'uc', 'cu', 'da', 'mu', 'ne', 'ni', 're', 'sa', 'se', 'su', 'te', 'zo'];
        let correctassilabasc = ['ca', 'ce', 'ci', 'co', 'cu'];

        if(Math.floor(Math.random()*10) > 5)
        {
            silabasc.sort();
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                silabasc.unshift(silabasc[Math.floor(Math.random()*10)]);
            }
            else
            {
                silabasc.push(silabasc[Math.floor(Math.random()*10)]);
            }
        }

        for(let i=0; i<silabasc.length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', silabasc[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "60px";
            button.style.border = "1px black solid";
            button.text =  silabasc[i];
            document.getElementById('botonescsilaba').append(button);
        }

        document.getElementById('botonescsilaba').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonescsilaba').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonescsilaba').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctassilabasc.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctassilabasc.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })

        //fin silabas

        //inicio palabra c
        let modelosc = ['cama', 'casa', 'circo', 'coco', 'conejo'];
        let palabrasc = {"cama": ['cama', 'amac', 'cpor', 'emac', 'camo', 'cana', 'anac', 'onac', 'como', 'omoc', 'onca', 'onoc'], "casa": ['casa', 'asac', 'saca', 'caso', 'casoinvertida', 'caza', 'cazainvertida', 'cora', 'coro', 'cosa', 'asoc', 'ocos'], "circo": ['circa', 'acric', 'circo', 'ocric', 'ocric', 'ocric', 'acirc', 'anric', 'onric', 'cirva', 'ovric', 'acryc', 'sirco'], "coco": ['acoc', 'caco', 'acoc', 'caro', 'orac', 'coca', 'coco', 'ococ', 'coc', 'cono', 'coro', 'oroc'], "conejo": ['cameja', 'camejo', 'camelo', 'ojenca', 'canela', 'alenca', 'enrac', 'ojemoc', 'conejo', 'ojenoc', 'conej', 'corneja', 'cortea']}

        let modelo_elegidoc = modelosc[Math.floor(Math.random()*5)];

        document.getElementById('modeloc').setAttribute('src', `{{asset('img/ejercicios/ejercicio2/palabras/modelos/c/')}}/${modelo_elegidoc}.jpg`)
        document.getElementById('modeloc').setAttribute('palabra', modelo_elegidoc)
        document.getElementById('modeloc_palabra').textContent = `${document.getElementById('modeloc_palabra').textContent} ${modelo_elegidoc}`;

        document.getElementById('modeloc').addEventListener('click', (e)=>{

            let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            mensaje.rate = 0.8;
            mensaje.text = e.target.getAttribute('palabra');
            speechSynthesis.speak(mensaje);

        })

        if(Math.floor(Math.random()*10) > 5)
        {
            palabrasc[modelo_elegidoc].sort();
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                palabrasc[modelo_elegidoc].unshift(palabrasc[modelo_elegidoc][Math.floor(Math.random()*palabrasc[modelo_elegidoc].length)]);
            }
            else
            {
                palabrasc[modelo_elegidoc].push(palabrasc[modelo_elegidoc][Math.floor(Math.random()*palabrasc[modelo_elegidoc].length)]);
            }
        }

        for(let i=0; i<palabrasc[modelo_elegidoc].length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', palabrasc[modelo_elegidoc][i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "100px";
            button.style.border = "1px black solid";
            button.text =  palabrasc[modelo_elegidoc][i];
            document.getElementById('botonescpalabra').append(button);
        }

        document.getElementById('botonescpalabra').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        });

        document.getElementById('calificarbotonescpalabra').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonescpalabra').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(e.getAttribute('palabra') == modelo_elegidoc)
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && e.getAttribute('palabra') == modelo_elegidoc)
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })

        //fin palabra
    </script>
    {{-- fin letra c --}}

    {{-- letra p --}}
    <script>
        //inicio letras
        let letrasp = ['z', 'r', 'd', 'u', 'j', 'l', 'm', 'p','q', 's', 'g', 'y', 'b'];
        let correctasp = ['p'];

        if(Math.floor(Math.random()*10) > 5)
        {
            letrasp.sort();
        }

        for (let i = 0; i < 10; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                letrasp.unshift(letrasp[Math.floor(Math.random()*letrasp.length)]);
            }
            else
            {
                letrasp.push(letrasp[Math.floor(Math.random()*letrasp.length)]);
            }
        }

        for(let i=0; i<letrasp.length; i++)
        {
            let button = document.createElement('a');
            let button2 = document.createElement('button');
            button.setAttribute('palabra', letrasp[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "60px";
            button.style.border = "1px black solid";
            button.text =  letrasp[i];
            document.getElementById('botonesp').append(button);
        }

        document.getElementById('botonesp').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            */
            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonesp').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesp').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctasp.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctasp.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })
        //fin letras

        //inicio silabas
        let silabasp = ['ya', 'bi', 'ud', 'de', 'ga', 'qe', 'pa', 'pe', 'qo', 'po', 'pu', 'qa', 'go', 'qi', 'pi', 'qu', 'te', 'bu', 'ab'];
        let correctassilabasp = ['pa', 'pe', 'pi', 'po', 'pu'];

        if(Math.floor(Math.random()*10) > 5)
        {
            silabasp.sort();
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                silabasp.unshift(silabasp[Math.floor(Math.random()*silabasp.length)]);
            }
            else
            {
                silabasp.push(silabasp[Math.floor(Math.random()*silabasp.length)]);
            }
        }

        for(let i=0; i<silabasp.length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', silabasp[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "60px";
            button.style.border = "1px black solid";
            button.text =  silabasp[i];
            document.getElementById('botonespsilaba').append(button);
        }

        document.getElementById('botonespsilaba').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonespsilaba').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonespsilaba').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctassilabasp.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctassilabasp.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })

        //fin silabas p

        //inicio palabra p
        let modelosp = ['panda', 'papa', 'pelota', 'pera', 'pez'];
        let palabrasp = {"panda": ['bellota', 'delata', 'delota', 'panda', 'pelato', 'qalota', 'qelata', 'qelato', 'qelota', 'qeloto', 'qelotta', 'quellota'], "papa": ['qaqo', 'pado', 'depo', 'dodo', 'dado', 'papa', 'papo', 'paqa', 'popo', 'poqo', 'qapo', 'dada'], "pelota": ['bellota', 'delata', 'delota', 'pelato', 'pelota', 'qalota', 'qelata', 'qelato', 'qelota', 'qeloto', 'qelotta', 'quellota'], "pera": ['para', 'pera', 'pero', 'perro', 'pira', 'qera', 'qero', 'qeva', 'qira', 'qoro'], "pez": ['des', 'dez', 'pas', 'paz', 'pes', 'pez', 'poz', 'puez', 'qes', 'qez', 'qoz', 'quez']}

        let modelo_elegidop = modelosp[Math.floor(Math.random()*modelosp.length)];

        document.getElementById('modelop').setAttribute('src', `{{asset('img/ejercicios/ejercicio2/palabras/modelos/p/')}}/${modelo_elegidop}.jpg`)
        document.getElementById('modelop').setAttribute('palabra', modelo_elegidop);
        document.getElementById('modelop_palabra').textContent = `${document.getElementById('modelop_palabra').textContent} ${modelo_elegidop}`;

        document.getElementById('modelop').addEventListener('click', (e)=>{

            let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            mensaje.rate = 0.8;
            mensaje.text = e.target.getAttribute('palabra');
            speechSynthesis.speak(mensaje);

        })

        if(Math.floor(Math.random()*10) > 5)
        {
            palabrasp[modelo_elegidop].sort();
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                palabrasp[modelo_elegidop].unshift(palabrasp[modelo_elegidop][Math.floor(Math.random()*palabrasp[modelo_elegidop].length)]);
            }
            else
            {
                palabrasp[modelo_elegidop].push(palabrasp[modelo_elegidop][Math.floor(Math.random()*palabrasp[modelo_elegidop].length)]);
            }
        }

        for(let i=0; i<palabrasp[modelo_elegidop].length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', palabrasp[modelo_elegidop][i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "100px";
            button.style.border = "1px black solid";
            button.text =  palabrasp[modelo_elegidop][i];
            document.getElementById('botonesppalabra').append(button);
        }

        document.getElementById('botonesppalabra').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        });

        document.getElementById('calificarbotonesppalabra').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesppalabra').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(e.getAttribute('palabra') == modelo_elegidop)
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && e.getAttribute('palabra') == modelo_elegidop)
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })

        //fin palabra
    </script>
    {{-- fin letra p --}}

    {{-- letra q --}}
    <script>
        //inicio letras
        let letrasq = ['z', 'b', 'y', 'g', 's', 'l', 'm', 'p','q','r', 'j', 'u', 'd', 'b'];
        let correctasq = ['q'];

        if(Math.floor(Math.random()*10) > 5)
        {
            letrasq.sort();
        }

        for (let i = 0; i < 10; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                letrasq.unshift(letrasq[Math.floor(Math.random()*letrasq.length)]);
            }
            else
            {
                letrasq.push(letrasq[Math.floor(Math.random()*letrasq.length)]);
            }
        }

        for(let i=0; i<letrasq.length; i++)
        {
            let button = document.createElement('a');
            let button2 = document.createElement('button');
            button.setAttribute('palabra', letrasq[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "60px";
            button.style.border = "1px black solid";
            button.text =  letrasq[i];
            document.getElementById('botonesq').append(button);
        }

        document.getElementById('botonesq').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            */
            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonesq').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesq').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctasq.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctasq.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })
        //fin letras

        //inicio silabas
        let silabasq = ['bue', 'bui', 'dui', 'dve', 'pua', 'pue', 'pui', 'pve', 'pvi', 'pvo', 'que', 'qui', 'quo', 'qve', 'qvi', 'qvu', 'yue', 'yui'];
        let correctassilabasq = ['que', 'qui'];

        if(Math.floor(Math.random()*10) > 5)
        {
            silabasq.sort();
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                silabasq.unshift(silabasq[Math.floor(Math.random()*silabasq.length)]);
            }
            else
            {
                silabasq.push(silabasq[Math.floor(Math.random()*silabasq.length)]);
            }
        }

        for(let i=0; i<silabasq.length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', silabasq[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "60px";
            button.style.border = "1px black solid";
            button.text =  silabasq[i];
            document.getElementById('botonesqsilaba').append(button);
        }

        document.getElementById('botonesqsilaba').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonesqsilaba').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesqsilaba').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctassilabasq.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctassilabasq.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })

        //fin silabas

        //inicio palabra
        let modelosq = ['queja', 'quemar', 'quena', 'queso'];
        let palabrasq = {"queja": ['buega', 'dveja', 'dvijo', 'pueja', 'puejo', 'pveja', 'pvejo', 'quega', 'queja', 'qveja', 'qvejo'], "quemar": ['buemar', 'bvemor', 'duemar', 'dvenor', 'puemar', 'puemor', 'quemar', 'quemor', 'quenar', 'quenor', 'qvemar', 'qvenar'], "quena": ['bvena', 'guena', 'puema', 'puena', 'pvema', 'quema', 'quena', 'queno', 'qvema', 'qvena'], "queso": ['beso', 'buesa', 'dueso', 'pesa', 'peso', 'pueso', 'pveso', 'quesa', 'queso', 'quezo', 'qveso']}

        let modelo_elegidoq = modelosq[Math.floor(Math.random()*modelosq.length)];

        document.getElementById('modeloq').setAttribute('src', `{{asset('img/ejercicios/ejercicio2/palabras/modelos/q/')}}/${modelo_elegidoq}.jpg`)
        document.getElementById('modeloq').setAttribute('palabra', modelo_elegidoq)
        document.getElementById('modeloq_palabra').textContent = `${document.getElementById('modeloq_palabra').textContent} ${modelo_elegidoq}`;

        document.getElementById('modeloq').addEventListener('click', (e)=>{

            let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            mensaje.rate = 0.8;
            mensaje.text = e.target.getAttribute('palabra');
            speechSynthesis.speak(mensaje);

        })

        if(Math.floor(Math.random()*10) > 5)
        {
            palabrasq[modelo_elegidoq].sort();
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                palabrasq[modelo_elegidoq].unshift(palabrasq[modelo_elegidoq][Math.floor(Math.random()*palabrasq[modelo_elegidoq].length)]);
            }
            else
            {
                palabrasq[modelo_elegidoq].push(palabrasq[modelo_elegidoq][Math.floor(Math.random()*palabrasq[modelo_elegidoq].length)]);
            }
        }

        for(let i=0; i<palabrasq[modelo_elegidoq].length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', palabrasq[modelo_elegidoq][i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "100px";
            button.style.border = "1px black solid";
            button.text =  palabrasq[modelo_elegidoq][i];
            document.getElementById('botonesqpalabra').append(button);
        }

        document.getElementById('botonesqpalabra').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        });

        document.getElementById('calificarbotonesqpalabra').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesqpalabra').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(e.getAttribute('palabra') == modelo_elegidoq)
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && e.getAttribute('palabra') == modelo_elegidoq)
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })

        //fin palabra
    </script>
    {{-- fin letra q --}}

    {{-- letra f --}}
    <script>
        //inicio letras
        let letrasf = ['b', 'b', 'd', 'f', 'j', 'l', 'm', 'p','q','r', 's', 'y', 'z'];
        let correctasf = ['f'];

        if(Math.floor(Math.random()*10) > 5)
        {
            letrasf.sort();
        }

        for (let i = 0; i < 10; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                letrasf.unshift(letrasf[Math.floor(Math.random()*letrasf.length)]);
            }
            else
            {
                letrasf.push(letrasf[Math.floor(Math.random()*letrasf.length)]);
            }
        }

        for(let i=0; i<letrasf.length; i++)
        {
            let button = document.createElement('a');
            let button2 = document.createElement('button');
            button.setAttribute('palabra', letrasf[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "60px";
            button.style.border = "1px black solid";
            button.text =  letrasf[i];
            document.getElementById('botonesf').append(button);
        }

        document.getElementById('botonesf').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            */
            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonesf').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesf').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctasf.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctasf.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })
        //fin letras

        //inicio silabas
        let silabasf = ['fa', 'bu', 'de', 'pa', 'fe', 'ga', 'fo', 'po', 'fi', 'bi', 'pe', 'pi', 'fu', 'pu', 'te', 'qe', 'ud', 'qo', 'qu', 'qa', 'qi'];
        let correctassilabasf = ['fa', 'fe', 'fi', 'fo', 'fu'];

        if(Math.floor(Math.random()*10) > 5)
        {
            silabasf.sort();
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                silabasf.unshift(silabasf[Math.floor(Math.random()*silabasf.length)]);
            }
            else
            {
                silabasf.push(silabasf[Math.floor(Math.random()*silabasf.length)]);
            }
        }

        for(let i=0; i<silabasf.length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', silabasf[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "60px";
            button.style.border = "1px black solid";
            button.text =  silabasf[i];
            document.getElementById('botonesfsilaba').append(button);
        }

        document.getElementById('botonesfsilaba').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonesfsilaba').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesfsilaba').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctassilabasf.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctassilabasf.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })

        //fin silabas

        //inicio palabra
        let modelosf = ['facil', 'falda', 'foca', 'fosil', 'foto'];
        let palabrasf = {"facil": ['facil', 'fasil', 'focil', 'fosil', 'jacit', 'jocit', 'josit', 'lacil', 'locif', 'losil', 'lozil'], "falda": ['falbo', 'falda', 'falla', 'folbo', 'folda', 'fotda', 'jaldo', 'lofda'], "foca": ['boca', 'foca', 'foco', 'jona', 'loca', 'lona', 'lova', 'poca', 'toca', 'tova'], "fosil": ['facil', 'fasil', 'focil', 'fosil', 'jocit', 'josit', 'lacil', 'locif', 'losil', 'lozil'], "foto": ['fata', 'fato', 'foca', 'folo', 'fota', 'foto', 'lata', 'lato', 'lota', 'loto', 'tofo']}

        let modelo_elegidof = modelosf[Math.floor(Math.random()*modelosf.length)];

        document.getElementById('modelof').setAttribute('src', `{{asset('img/ejercicios/ejercicio2/palabras/modelos/f/')}}/${modelo_elegidof}.jpg`)
        document.getElementById('modelof').setAttribute('palabra', modelo_elegidof);
        document.getElementById('modelof_palabra').textContent = `${document.getElementById('modelof_palabra').textContent} ${modelo_elegidof}`;

        document.getElementById('modelof').addEventListener('click', (e)=>{

            let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            mensaje.rate = 0.8;
            mensaje.text = e.target.getAttribute('palabra');
            speechSynthesis.speak(mensaje);

        })

        if(Math.floor(Math.random()*10) > 5)
        {
            palabrasf[modelo_elegidof].sort();
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                palabrasf[modelo_elegidof].unshift(palabrasf[modelo_elegidof][Math.floor(Math.random()*palabrasf[modelo_elegidof].length)]);
            }
            else
            {
                palabrasf[modelo_elegidof].push(palabrasf[modelo_elegidof][Math.floor(Math.random()*palabrasf[modelo_elegidof].length)]);
            }
        }

        for(let i=0; i<palabrasf[modelo_elegidof].length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', palabrasf[modelo_elegidof][i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "100px";
            button.style.border = "1px black solid";
            button.text = palabrasf[modelo_elegidof][i];
            document.getElementById('botonesfpalabra').append(button);
        }

        document.getElementById('botonesfpalabra').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        });

        document.getElementById('calificarbotonesfpalabra').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonesfpalabra').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(e.getAttribute('palabra') == modelo_elegidof)
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && e.getAttribute('palabra') == modelo_elegidof)
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })

        //fin palabra
    </script>
    {{-- fin letra f --}}

    {{-- letra t --}}
    <script>
        //inicio letras
        let letrast = ['z', 'b', 'f', 't', 'l', 'y', 'p','q','r', 's', 'i','m', 'b'];
        let correctast = ['t'];

        if(Math.floor(Math.random()*10) > 5)
        {
            letrast.sort();
        }

        for (let i = 0; i < 10; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                letrast.unshift(letrast[Math.floor(Math.random()*letrast.length)]);
            }
            else
            {
                letrast.push(letrast[Math.floor(Math.random()*letrast.length)]);
            }
        }

        for(let i=0; i<letrast.length; i++)
        {
            let button = document.createElement('a');
            let button2 = document.createElement('button');
            button.setAttribute('palabra', letrast[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "60px";
            button.style.border = "1px black solid";
            button.text = letrast[i];
            document.getElementById('botonest').append(button);
        }

        document.getElementById('botonest').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            */
            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonest').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonest').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctast.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctast.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })
        //fin letras

        //inicio silabas
        let silabast = ['tu', 'bu', 'to', 'de', 'fi', 'lu', 'ka', 'pi', 'le', 'li', 'lo', 'fu', 'la', 'qi', 'qu', 'ta', 'te', 'ti', 'be', 'ba'];
        let correctassilabast = ['ta', 'te', 'ti', 'to', 'tu'];

        if(Math.floor(Math.random()*10) > 5)
        {
            silabast.sort()
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                silabast.unshift(silabast[Math.floor(Math.random()*silabast.length)]);
            }
            else
            {
                silabast.push(silabast[Math.floor(Math.random()*silabast.length)]);
            }
        }

        for(let i=0; i<silabast.length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', silabast[i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "60px";
            button.style.border = "1px black solid";
            button.text = silabast[i];
            document.getElementById('botonestsilaba').append(button);
        }

        document.getElementById('botonestsilaba').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        })

        document.getElementById('calificarbotonestsilaba').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonestsilaba').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(correctassilabast.includes(e.getAttribute('palabra')))
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && correctassilabast.includes(e.getAttribute('palabra')))
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })

        //fin silabas

        //inicio palabra
        let modelost = ['tambor', 'taza', 'tigre', 'tomate', 'tortuga'];
        let palabrast = {"tambor": ['lambar', 'lambor', 'lamdor', 'lombar', 'lonbor', 'tambor', 'tamdor', 'tanbor', 'tonbar', 'tonbor', 'tondar'], "taza": ['laza', 'losa', 'loza', 'lozo', 'tasa', 'taza', 'toza', 'tozo'], "tigre": ['ligra', 'ligre', 'lijre', 'tigre', 'tigro', 'tijre', 'tijro', 'tiqre'], "tomate": ['banate', 'domate', 'lanate', 'lomate', 'tanale', 'tanate', 'tomade', 'tomale', 'tomate', 'tonalo', 'tonate'], "tortuga": ['larluuga', 'lartugo', 'lortuga', 'lortuja', 'tartago', 'tartajo', 'torluga', 'tortuga', 'tortugo', 'tortuja']}

        let modelo_elegidot = modelost[Math.floor(Math.random()*modelost.length)];

        document.getElementById('modelot').setAttribute('src', `{{asset('img/ejercicios/ejercicio2/palabras/modelos/t/')}}/${modelo_elegidot}.jpg`)
        document.getElementById('modelot').setAttribute('palabra', modelo_elegidot);
        document.getElementById('modelot_palabra').textContent = `${document.getElementById('modelot_palabra').textContent} ${modelo_elegidot}`;

        document.getElementById('modelot').addEventListener('click', (e)=>{

            let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]
            mensaje.rate = 0.8;
            mensaje.text = e.target.getAttribute('palabra');
            speechSynthesis.speak(mensaje);

        })

        if(Math.floor(Math.random()*10) > 5)
        {
            palabrast[modelo_elegidot].sort();
        }

        for (let i = 0; i < 6; i++)
        {
            if(Math.floor(Math.random()*10) > 5)
            {
                palabrast[modelo_elegidot].unshift(palabrast[modelo_elegidot][Math.floor(Math.random()*palabrast[modelo_elegidot].length)]);
            }
            else
            {
                palabrast[modelo_elegidot].push(palabrast[modelo_elegidot][Math.floor(Math.random()*palabrast[modelo_elegidot].length)])
            }
        }

        for(let i=0; i<palabrast[modelo_elegidot].length; i++)
        {
            let button = document.createElement('a');
            button.setAttribute('palabra', palabrast[modelo_elegidot][i]);
            button.classList.add('btn');
            button.style.margin = "15px";
            button.style.cursor = "pointer";
            button.style.fontSize = "20px";
            button.style.width = "100px";
            button.style.border = "1px black solid";
            button.text = palabrast[modelo_elegidot][i];
            document.getElementById('botonestpalabra').append(button);
        }

        document.getElementById('botonestpalabra').addEventListener('click', (e)=>{
            
            /* let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0]; */

            if(e.target.nodeName == 'A')
            {
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');
                /* mensaje.text = e.target.getAttribute('palabra').replace('2', ''); */
            }
            else if(e.target.nodeName == 'IMG')
            {
                e.target.parentElement.setAttribute('disabled', 'disabled');
                e.target.parentElement.classList.add('disabled','bg-primary');
                /* mensaje.text = e.target.parentElement.getAttribute('palabra').replace('2', ''); */
            }
            /* mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje); */

        });

        document.getElementById('calificarbotonestpalabra').addEventListener('click', ()=>{
            let faltantes = 0;
            let incorrectas = 0;
            [...document.getElementById('botonestpalabra').children].map( e=>{

                if(e.classList.contains('disabled'))
                {
                    if(e.getAttribute('palabra') == modelo_elegidot)
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-success');
                    }
                    else
                    {
                        e.classList.remove('bg-primary');
                        e.classList.add('bg-danger');
                        incorrectas++;
                    }
                }

                if(!e.classList.contains('disabled') && e.getAttribute('palabra') == modelo_elegidot)
                {
                    faltantes++;
                }
                

            })

            if(faltantes == 0 && incorrectas == 0)
            {
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente',
                    text:'Felicidades, acertaste en todas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else if(incorrectas == 0 && faltantes>0)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Por poco lo logras',
                    text:'Te faltaron respuestas',
                    showConfirmButton: false,
                    timer: 1000
                })
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Fallaste',
                    text:'Debes entrenar un poco más',
                    showConfirmButton: false,
                    timer: 1000
                })
            }

        })

        //fin palabra
    </script>
    {{-- fin letra t --}}
@stop