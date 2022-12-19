@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"> <b></b> Ejercicio 3</h1>
@stop

@section('css')
    <style>
        .botones
        {
            padding: 10px;
            border-color: #140202;
            border-width: 2px;
            border-style: solid;
        }

        /* img
        {
            height: 63px;
            width: 63px;
        } */
    </style>
@stop

@section('plugins.Select2', true)

@section('content')

<div class="card card-primary card-outline">
    <input type="hidden" name="palabrasdazar" id="palabrasdazar">
    <input type="hidden" name="respuestasd" id="respuestasd">
    <input type="hidden" name="itemd" id="itemd" value="0">

    <input type="hidden" name="palabrasbazar" id="palabrasbazar">
    <input type="hidden" name="respuestasb" id="respuestasb">
    <input type="hidden" name="itemb" id="itemb" value="0">

    <input type="hidden" name="palabrasmazar" id="palabrasmazar">
    <input type="hidden" name="respuestasm" id="respuestasm">
    <input type="hidden" name="itemm" id="itemm" value="0">

    <input type="hidden" name="palabraspazar" id="palabraspazar">
    <input type="hidden" name="respuestasp" id="respuestasp">
    <input type="hidden" name="itemp" id="itemp" value="0">

    <input type="hidden" name="palabrasqazar" id="palabrasqazar">
    <input type="hidden" name="respuestasq" id="respuestasq">
    <input type="hidden" name="itemq" id="itemq" value="0">

    <input type="hidden" name="palabrasfazar" id="palabrasfazar">
    <input type="hidden" name="respuestasf" id="respuestasf">
    <input type="hidden" name="itemf" id="itemf" value="0">

    <input type="hidden" name="palabrastazar" id="palabrastazar">
    <input type="hidden" name="respuestast" id="respuestast">
    <input type="hidden" name="itemt" id="itemt" value="0">
    <div class="card-header bg-primary">
        <h2><i class="fas fa-edit"></i>  Seleccione las palabras inventadas en el siguiente juego de palabras <button class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}" alt=""></button></h2>
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
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#m" role="tab" aria-controls="contact" aria-selected="false"><h2><b>m</b></h2></a>
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
                <br>
                <div id="palabrasd" class="row botones"></div>
                <br>
                <button id="comenzard" class="btn btn-secondary">Comenzar</button>
                <button id="siguiented" disabled class="btn btn-success">Siguiente</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
            </div>
            {{-- fin primer subitem --}}

            {{-- segundo subitem --}}
            <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="profile-tab">
                <br>
                <div id="palabrasb" class="row botones"></div>
                <br>
                <button id="comenzarb" class="btn btn-secondary">Comenzar</button>
                <button id="siguienteb" disabled class="btn btn-success">Siguiente</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
            </div>
            {{-- fin segundo subitem --}}

            {{-- tercer subitem --}}
            <div class="tab-pane fade" id="m" role="tabpanel" aria-labelledby="contact-tab">
                <br>
                <div id="palabrasm" class="row botones"></div>
                <br>
                <button id="comenzarm" class="btn btn-secondary">Comenzar</button>
                <button id="siguientem" disabled class="btn btn-success">Siguiente</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
            </div>
            {{-- fin tercer subitem --}}

            {{-- cuarto subitem --}}
            <div class="tab-pane fade" id="p" role="tabpanel" aria-labelledby="contact-tab">
                <br>
                <div id="palabrasp" class="row botones"></div>
                <br>
                <button id="comenzarp" class="btn btn-secondary">Comenzar</button>
                <button id="siguientep" disabled class="btn btn-success">Siguiente</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
            </div>
            {{-- fin cuarto subitem --}}

            {{-- quinto subitem --}}
            <div class="tab-pane fade" id="q" role="tabpanel" aria-labelledby="contact-tab">
                <br>
                <div id="palabrasq" class="row botones"></div>
                <br>
                <button id="comenzarq" class="btn btn-secondary">Comenzar</button>
                <button id="siguienteq" disabled class="btn btn-success">Siguiente</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
            </div>
            {{-- fin quinto subitem --}}

            {{-- sexto subitem --}}
            <div class="tab-pane fade" id="f" role="tabpanel" aria-labelledby="contact-tab">
                <br>
                <div id="palabrasf" class="row botones"></div>
                <br>
                <button id="comenzarf" class="btn btn-secondary">Comenzar</button>
                <button id="siguientef" disabled class="btn btn-success">Siguiente</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
            </div>
            {{-- fin sexto subitem --}}

            {{-- septimo subitem --}}
            <div class="tab-pane fade" id="t" role="tabpanel" aria-labelledby="contact-tab">
                <br>
                <div id="palabrast" class="row botones"></div>
                <br>
                <button id="comenzart" class="btn btn-secondary">Comenzar</button>
                <button id="siguientet" disabled class="btn btn-success">Siguiente</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
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

        let azar = 0;
        document.getElementById('itemd').value = 0;
        document.getElementById('itemb').value = 0;
        document.getElementById('itemm').value = 0;
        document.getElementById('itemp').value = 0;
        document.getElementById('itemq').value = 0;
        document.getElementById('itemf').value = 0;
        document.getElementById('itemt').value = 0;

        document.getElementById('siguiented').setAttribute('disabled', 'disabled');
        document.getElementById('siguienteb').setAttribute('disabled', 'disabled');
        document.getElementById('siguientem').setAttribute('disabled', 'disabled');
        document.getElementById('siguientep').setAttribute('disabled', 'disabled');
        document.getElementById('siguienteq').setAttribute('disabled', 'disabled');
        document.getElementById('siguientef').setAttribute('disabled', 'disabled');
        document.getElementById('siguientet').setAttribute('disabled', 'disabled');

        $('.ordenes').on('click', function(){

            let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            mensaje.rate = 0.8;
            mensaje.text = $(this).parent().text();
            speechSynthesis.speak(mensaje);
        })
    </script>
    {{-- fin script general --}}

    {{-- script d --}}
    <script>
        let diccionariod = [['dentista', 'bentista'], ['dinero', 'binero'], ['delgado', 'belgado'], ['dinosaurio', 'binosaurio'], ['doncella', 'boncella'], ['desierto', 'besierto'], ['deporte', 'beporte'], ['desfile', 'besfile'], ['durazno', 'burazno'], ['dormitorio', 'bormitorio'], ['documento', 'bocumento'], ['discoteca', 'biscoteca'], ['dormir', 'bormir'], ['disculpa', 'bisculpa'], ['docente', 'bocente'], ['derretir', 'berretir'], ['ducha', 'bucha'], ['desayuno', 'besayuno'], ['diploma', 'biploma']];
        let respuestasd = ['dentista', 'dinero', 'delgado', 'dinosaurio', 'doncella', 'desierto', 'deporte', 'desfile', 'durazno', 'dormitorio', 'documento', 'discoteca', 'dormir', 'disculpa', 'docente', 'derretir', 'ducha', 'desayuno', 'diploma'];
        let seleccionadosd = [];
        let seleccionadospalabrasd = [];

        for (let i = 0; i < 5; i++)
        {
            azar = Math.floor(Math.random()*diccionariod.length);
            if(seleccionadosd.includes(azar))
            {
                i--;
                continue;
            }
            seleccionadosd.push(azar);
            seleccionadospalabrasd.push(diccionariod[azar]);
        }

        document.getElementById('palabrasdazar').value =  seleccionadosd.toString();

        document.getElementById('siguiented').addEventListener('click', ()=>{

            [...palabrasd.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabrasdazar').value.split(',')[Number(document.getElementById('itemd').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.append(img2);
            boton3.id="volumend";
            boton3.setAttribute('palabra', respuestasd[numero])
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/d/')}}/${respuestasd[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionariod[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrasd').append(div1);
            document.getElementById('palabrasd').append(boton);
            document.getElementById('palabrasd').append(div2);
            boton2.textContent = diccionariod[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrasd').append(boton2);
            document.getElementById('palabrasd').append(div3);
            document.getElementById('palabrasd').append(boton3);
            document.getElementById('palabrasd').append(img);
            document.getElementById('itemd').value = Number(document.getElementById('itemd').value)+1;

            if(Number(document.getElementById('itemd').value) == 5)
            {
                document.getElementById('siguiented').setAttribute('disabled', 'disabled')
            }
        })

        document.getElementById('comenzard').addEventListener('click', ()=>{

            [...palabrasd.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabrasdazar').value.split(',')[Number(document.getElementById('itemd').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.id="volumend";
            boton3.append(img2);
            boton3.setAttribute('palabra', respuestasd[numero])
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/d/')}}/${respuestasd[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionariod[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrasd').append(div1);
            document.getElementById('palabrasd').append(boton);
            document.getElementById('palabrasd').append(div2);
            boton2.textContent = diccionariod[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrasd').append(boton2);
            document.getElementById('palabrasd').append(div3);
            document.getElementById('palabrasd').append(boton3);
            document.getElementById('palabrasd').append(img);
            document.getElementById('itemd').value = Number(document.getElementById('itemd').value)+1;

            document.getElementById('comenzard').setAttribute('disabled', 'disabled');
            document.getElementById('siguiented').removeAttribute('disabled');
        })

        document.getElementById('palabrasd').addEventListener('click', (e)=>{
            
            if(e.target.nodeName == 'BUTTON' && !e.target.classList.contains('volumen'))
            {
                //animaciones cuando se equivoca
                if(document.getElementById('volumend').getAttribute('palabra') == e.target.textContent)
                {
                    Swal.fire({
                        
                        icon: 'success',
                        title: 'Excelente',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
                else
                {
                    Swal.fire({
                        
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }

                let contador=0;
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');

                [...e.target.parentElement.children].map(e =>{

                    if(e.nodeName == "BUTTON" && contador<2)
                    {
                        e.classList.add('disabled');
                        e.setAttribute('disabled', 'disabled');
                        contador++;
                    }

                });
            }
            else if(e.target.nodeName == 'BUTTON' && e.target.classList.contains('volumen'))
            {
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.text = e.target.getAttribute('palabra');
                mensaje.rate = 0.8;
                speechSynthesis.speak(mensaje);
            }
        })

        
    </script>
    {{-- fin script d --}}

    {{-- script b --}}
    <script>
        let diccionariob = [['burro', 'bullo'], ['bailar', 'dailar'], ['bacteria', 'dacteria'], ['danana', 'banana'], ['dandera', 'bandera'], ['daño', 'baño'], ['dalcon', 'balcon'], ['beso', 'deso'], ['dermuda', 'bermuda'], ['biblioteca', 'diblioteca'], ['billetera', 'dilletera'], ['biberon', 'diberon'], ['bombon', 'dombon'], ['búfalo', 'dúfalo'], ['durbuja', 'burbuja'], ['botella', 'dotella'], ['dolso', 'bolso'], ['binario', 'dinario'], ['bellota', 'dellota'], ['bateria', 'dateria']];
        let respuestasb = ['burro', 'bailar', 'bacteria', 'banana', 'bandera', 'baño', 'balcon', 'beso', 'bermuda', 'biblioteca', 'billetera', 'biberon', 'bombon', 'bufalo', 'burbuja', 'botella', 'bolso', 'binario', 'bellota', 'bateria'];
        let seleccionadosb = [];
        let seleccionadospalabrasb = [];

        for (let i = 0; i < 5; i++)
        {
            azar = Math.floor(Math.random()*diccionariob.length);
            if(seleccionadosb.includes(azar))
            {
                i--;
                continue;
            }
            seleccionadosb.push(azar);
            seleccionadospalabrasb.push(diccionariob[azar]);
        }
        document.getElementById('palabrasbazar').value =  seleccionadosb.toString();

        document.getElementById('siguienteb').addEventListener('click', ()=>{

            [...palabrasb.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabrasbazar').value.split(',')[Number(document.getElementById('itemb').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.append(img2);
            boton3.id="volumenb";
            boton3.setAttribute('palabra', respuestasb[numero])
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/b/')}}/${respuestasb[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionariob[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrasb').append(div1);
            document.getElementById('palabrasb').append(boton);
            document.getElementById('palabrasb').append(div2);
            boton2.textContent = diccionariob[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrasb').append(boton2);
            document.getElementById('palabrasb').append(div3);
            document.getElementById('palabrasb').append(boton3);
            document.getElementById('palabrasb').append(img);
            document.getElementById('itemb').value = Number(document.getElementById('itemb').value)+1;

            if(Number(document.getElementById('itemb').value) == 5)
            {
                document.getElementById('siguienteb').setAttribute('disabled', 'disabled')
            }
        })

        document.getElementById('comenzarb').addEventListener('click', ()=>{

            [...palabrasb.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabrasbazar').value.split(',')[Number(document.getElementById('itemb').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.id="volumenb";
            boton3.append(img2);
            boton3.setAttribute('palabra', respuestasb[numero])
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/b/')}}/${respuestasb[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionariob[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrasb').append(div1);
            document.getElementById('palabrasb').append(boton);
            document.getElementById('palabrasb').append(div2);
            boton2.textContent = diccionariob[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrasb').append(boton2);
            document.getElementById('palabrasb').append(div3);
            document.getElementById('palabrasb').append(boton3);
            document.getElementById('palabrasb').append(img);
            document.getElementById('itemb').value = Number(document.getElementById('itemb').value)+1;

            document.getElementById('comenzarb').setAttribute('disabled', 'disabled');
            document.getElementById('siguienteb').removeAttribute('disabled');
        })

        document.getElementById('palabrasb').addEventListener('click', (e)=>{
            
            if(e.target.nodeName == 'BUTTON' && !e.target.classList.contains('volumen'))
            {
                //animaciones cuando se equivoca
                if(document.getElementById('volumenb').getAttribute('palabra') == e.target.textContent)
                {
                    Swal.fire({
                        
                        icon: 'success',
                        title: 'Excelente',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
                else
                {
                    Swal.fire({
                        
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }

                let contador=0;
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');

                [...e.target.parentElement.children].map(e =>{

                    if(e.nodeName == "BUTTON" && contador<2)
                    {
                        e.classList.add('disabled');
                        e.setAttribute('disabled', 'disabled');
                        contador++;
                    }

                });
            }
            else if(e.target.nodeName == 'BUTTON' && e.target.classList.contains('volumen'))
            {
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.text = e.target.getAttribute('palabra');
                mensaje.rate = 0.8;
                speechSynthesis.speak(mensaje);
            }
        })

    </script>
    {{-- fin script b --}}

    {{-- script m --}}
    <script>
        let diccionariom = [['madera', 'nadera'], ['mago', 'nago'], ['maíz', 'naíz'], ['manzana', 'nanzana'], ['mansión', 'nansión'], ['marinero', 'narinero'], ['martillo', 'nartillo'], ['medusa', 'nedusa'], ['melón', 'nelón'], ['micrófono', 'nicrófono'], ['molino', 'nolino'], ['nilitar', 'militar'], ['nundo', 'mundo'], ['nujer', 'mujer'], ['noto', 'moto'], ['núsica', 'música'], ['nesa', 'mesa'], ['medalla', 'nedalla'], ['nedico', 'medico'], ['necánico', 'mecánico']];
        let respuestasm = ['madera', 'mago', 'maíz', 'manzana', 'mansión', 'marinero', 'martillo', 'medusa', 'melón', 'micrófono', 'molino', 'militar', 'mundo', 'mujer', 'moto', 'música', 'mesa', 'medalla', 'medico', 'mecánico'];
        let seleccionadosm = [];
        let seleccionadospalabrasm = [];

        for (let i = 0; i < 5; i++)
        {
            azar = Math.floor(Math.random()*diccionariom.length);
            if(seleccionadosm.includes(azar))
            {
                i--;
                continue;
            }
            seleccionadosm.push(azar);
            seleccionadospalabrasm.push(diccionariom[azar]);
        }

        document.getElementById('palabrasmazar').value =  seleccionadosm.toString();

        document.getElementById('siguientem').addEventListener('click', ()=>{

            [...palabrasm.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabrasmazar').value.split(',')[Number(document.getElementById('itemm').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.append(img2);
            boton3.id="volumenm";
            boton3.setAttribute('palabra', respuestasm[numero])
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/m/')}}/${respuestasm[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionariom[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrasm').append(div1);
            document.getElementById('palabrasm').append(boton);
            document.getElementById('palabrasm').append(div2);
            boton2.textContent = diccionariom[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrasm').append(boton2);
            document.getElementById('palabrasm').append(div3);
            document.getElementById('palabrasm').append(boton3);
            document.getElementById('palabrasm').append(img);
            document.getElementById('itemm').value = Number(document.getElementById('itemm').value)+1;

            if(Number(document.getElementById('itemm').value) == 5)
            {
                document.getElementById('siguientem').setAttribute('disabled', 'disabled')
            
            }

        })

        document.getElementById('comenzarm').addEventListener('click', ()=>{

            [...palabrasm.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabrasmazar').value.split(',')[Number(document.getElementById('itemm').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.id="volumenm";
            boton3.append(img2);
            boton3.setAttribute('palabra', respuestasm[numero])
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/m/')}}/${respuestasm[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionariom[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrasm').append(div1);
            document.getElementById('palabrasm').append(boton);
            document.getElementById('palabrasm').append(div2);
            boton2.textContent = diccionariom[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrasm').append(boton2);
            document.getElementById('palabrasm').append(div3);
            document.getElementById('palabrasm').append(boton3);
            document.getElementById('palabrasm').append(img);
            document.getElementById('itemm').value = Number(document.getElementById('itemm').value)+1;

            document.getElementById('comenzarm').setAttribute('disabled', 'disabled');
            document.getElementById('siguientem').removeAttribute('disabled');
        })

        document.getElementById('palabrasm').addEventListener('click', (e)=>{
            
            if(e.target.nodeName == 'BUTTON' && !e.target.classList.contains('volumen'))
            {
                //animaciones cuando se equivoca
                if(document.getElementById('volumenm').getAttribute('palabra') == e.target.textContent)
                {
                    Swal.fire({
                        
                        icon: 'success',
                        title: 'Excelente',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
                else
                {
                    Swal.fire({
                        
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }

                let contador=0;
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');

                [...e.target.parentElement.children].map(e =>{

                    if(e.nodeName == "BUTTON" && contador<2)
                    {
                        e.classList.add('disabled');
                        e.setAttribute('disabled', 'disabled');
                        contador++;
                    }

                });
            }
            else if(e.target.nodeName == 'BUTTON' && e.target.classList.contains('volumen'))
            {
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.text = e.target.getAttribute('palabra');
                mensaje.rate = 0.8;
                speechSynthesis.speak(mensaje);
            }
        })

    </script>
    {{-- fin script m --}}

    {{-- script p --}}
    <script>
        let diccionariop = [['pirámide', 'qirámide'], ['quiano', 'piano'], ['qastel', 'pastel'], ['plantas', 'qlantas'], ['pulmón', 'qulmón'], ['qolicía', 'policía'], ['qolítico', 'político'], ['peleador', 'qeleador'], ['pueblo', 'queblo'], ['pozo', 'qozo'], ['pequeño', 'qequeño'], ['querto', 'puerto'], ['qrimavera', 'primavera'], ['qalabra', 'palabra'], ['qicante', 'picante'], ['qerfume', 'perfume'], ['qirata', 'pirata'], ['planeta', 'qlaneta'], ['qrisión', 'prisión'], ['qersona', 'persona']];
        let respuestasp = ['pirámide', 'piano', 'pastel', 'plantas', 'pulmón', 'policía', 'político', 'peleador', 'pueblo', 'pozo', 'pequeño', 'puerto', 'primavera', 'palabra', 'picante', 'perfume', 'pirata', 'planeta', 'prisión', 'persona'];
        let seleccionadosp = [];
        let seleccionadospalabrasp = [];

        for (let i = 0; i < 5; i++)
        {
            azar = Math.floor(Math.random()*diccionariop.length);
            if(seleccionadosp.includes(azar))
            {
                i--;
                continue;
            }
            seleccionadosp.push(azar);
            seleccionadospalabrasp.push(diccionariop[azar]);
        }

        document.getElementById('palabraspazar').value =  seleccionadosp.toString();

        document.getElementById('siguientep').addEventListener('click', ()=>{

            [...palabrasp.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabraspazar').value.split(',')[Number(document.getElementById('itemp').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.append(img2);
            boton3.id="volumenp";
            boton3.setAttribute('palabra', respuestasp[numero])
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/p/')}}/${respuestasp[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionariop[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrasp').append(div1);
            document.getElementById('palabrasp').append(boton);
            document.getElementById('palabrasp').append(div2);
            boton2.textContent = diccionariop[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrasp').append(boton2);
            document.getElementById('palabrasp').append(div3);
            document.getElementById('palabrasp').append(boton3);
            document.getElementById('palabrasp').append(img);
            document.getElementById('itemp').value = Number(document.getElementById('itemp').value)+1;

            if(Number(document.getElementById('itemp').value) == 5)
            {
                document.getElementById('siguientep').setAttribute('disabled', 'disabled')
            }

        })

        document.getElementById('comenzarp').addEventListener('click', ()=>{

            [...palabrasm.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabraspazar').value.split(',')[Number(document.getElementById('itemp').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.id="volumenp";
            boton3.append(img2);
            boton3.setAttribute('palabra', respuestasp[numero])
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/p/')}}/${respuestasp[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionariop[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrasp').append(div1);
            document.getElementById('palabrasp').append(boton);
            document.getElementById('palabrasp').append(div2);
            boton2.textContent = diccionariop[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrasp').append(boton2);
            document.getElementById('palabrasp').append(div3);
            document.getElementById('palabrasp').append(boton3);
            document.getElementById('palabrasp').append(img);
            document.getElementById('itemp').value = Number(document.getElementById('itemp').value)+1;

            document.getElementById('comenzarp').setAttribute('disabled', 'disabled');
            document.getElementById('siguientep').removeAttribute('disabled');
        })

        document.getElementById('palabrasp').addEventListener('click', (e)=>{
            
            if(e.target.nodeName == 'BUTTON' && !e.target.classList.contains('volumen'))
            {
                //animaciones cuando se equivoca
                if(document.getElementById('volumenp').getAttribute('palabra') == e.target.textContent)
                {
                    Swal.fire({
                        
                        icon: 'success',
                        title: 'Excelente',
                        showConfirmButton: true,
                        timer: 1000
                    })
                }
                else
                {
                    Swal.fire({
                        
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: true,
                        timer: 1000
                    })
                }

                let contador=0;
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');

                [...e.target.parentElement.children].map(e =>{

                    if(e.nodeName == "BUTTON" && contador<2)
                    {
                        e.classList.add('disabled');
                        e.setAttribute('disabled', 'disabled');
                        contador++;
                    }

                });
            }
            else if(e.target.nodeName == 'BUTTON' && e.target.classList.contains('volumen'))
            {
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.text = e.target.getAttribute('palabra');
                mensaje.rate = 0.8;
                speechSynthesis.speak(mensaje);
            }
        })

    </script>
    {{-- fin script p --}}

    {{-- script q --}}
    <script>
        let diccionarioq = [['queso', 'pueso'], ['químico', 'puímico'], ['puesadilla', 'quesadilla'], ['duque', 'puque'], ['parque', 'parpue'], ['chepue', 'cheque'], ['mápuina', 'máquina'], ['orquesta', 'orpuesta'], ['vaquero', 'vapuero'], ['paquete', 'papuete'], ['buque', 'bupue'], ['lipuido', 'líquido']];
        let respuestasq = ['queso', 'químico', 'quesadilla', 'duque', 'parque', 'cheque', 'máquina', 'orquesta', 'vaquero', 'paquete', 'buque', 'líquido'];
        let seleccionadosq = [];
        let seleccionadospalabrasq = [];

        for (let i = 0; i < 5; i++)
        {
            azar = Math.floor(Math.random()*diccionarioq.length);
            if(seleccionadosq.includes(azar))
            {
                i--;
                continue;
            }
            seleccionadosq.push(azar);
            seleccionadospalabrasq.push(diccionarioq[azar]);
        }

        document.getElementById('palabrasqazar').value =  seleccionadosq.toString();

        document.getElementById('siguienteq').addEventListener('click', ()=>{

            [...palabrasq.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabrasqazar').value.split(',')[Number(document.getElementById('itemq').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.append(img2);
            boton3.id="volumenq";
            boton3.setAttribute('palabra', respuestasq[numero])
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/q/')}}/${respuestasq[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionarioq[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrasq').append(div1);
            document.getElementById('palabrasq').append(boton);
            document.getElementById('palabrasq').append(div2);
            boton2.textContent = diccionarioq[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrasq').append(boton2);
            document.getElementById('palabrasq').append(div3);
            document.getElementById('palabrasq').append(boton3);
            document.getElementById('palabrasq').append(img);
            document.getElementById('itemq').value = Number(document.getElementById('itemq').value)+1;

            if(Number(document.getElementById('itemq').value) == 5)
            {
                document.getElementById('siguienteq').setAttribute('disabled', 'disabled')
            }

        })

        document.getElementById('comenzarq').addEventListener('click', ()=>{

            [...palabrasq.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabrasqazar').value.split(',')[Number(document.getElementById('itemq').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.id="volumenq";
            boton3.append(img2);
            boton3.setAttribute('palabra', respuestasq[numero])  
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/q/')}}/${respuestasq[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionarioq[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrasq').append(div1);
            document.getElementById('palabrasq').append(boton);
            document.getElementById('palabrasq').append(div2);
            boton2.textContent = diccionarioq[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrasq').append(boton2);
            document.getElementById('palabrasq').append(div3);
            document.getElementById('palabrasq').append(boton3);
            document.getElementById('palabrasq').append(img);
            document.getElementById('itemq').value = Number(document.getElementById('itemq').value)+1;

            document.getElementById('comenzarq').setAttribute('disabled', 'disabled');
            document.getElementById('siguienteq').removeAttribute('disabled');
        })

        document.getElementById('palabrasq').addEventListener('click', (e)=>{
            
            if(e.target.nodeName == 'BUTTON' && !e.target.classList.contains('volumen'))
            {
                //animaciones cuando se equivoca
                if(document.getElementById('volumenq').getAttribute('palabra') == e.target.textContent)
                {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Excelente',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
                else
                {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }

                let contador=0;
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');

                [...e.target.parentElement.children].map(e =>{

                    if(e.nodeName == "BUTTON" && contador<2)
                    {
                        e.classList.add('disabled');
                        e.setAttribute('disabled', 'disabled');
                        contador++;
                    }

                });
            }
            else if(e.target.nodeName == 'BUTTON' && e.target.classList.contains('volumen'))
            {
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.text = e.target.getAttribute('palabra');
                mensaje.rate = 0.8;
                speechSynthesis.speak(mensaje);
            }
        })

    </script>
    {{-- fin script q --}}

    {{-- script f --}}
    <script>
        let diccionariof = [['foco', 'toco'], ['flor', 'tlor'], ['tútbol', 'fútbol'], ['fresa', 'tresa'], ['frasco', 'trasco'], ['tlaco', 'flaco'], ['tactura', 'factura'], ['foto', 'toto'], ['famoso', 'tamoso'], ['farmacia', 'tarmacia'], ['feliz', 'teliz'], ['trancia', 'francia'], ['fruta', 'truta'], ['fábrica', 'tátrica'], ['funda', 'tunda'], ['tuerte', 'fuerte'], ['fuente', 'tuente'], ['ternando', 'fernando'], ['fósforo', 'tósforo'], ['áfrica', 'táfrica']];
        let respuestasf = ['foco', 'flor', 'fútbol', 'fresa', 'frasco', 'flaco', 'factura', 'foto', 'famoso', 'farmacia', 'feliz', 'francia', 'fruta', 'fábrica', 'funda', 'fuerte', 'fuente', 'fernando', 'fósforo', 'áfrica'];
        let seleccionadosf = [];
        let seleccionadospalabrasf = [];

        for (let i = 0; i < 5; i++)
        {
            azar = Math.floor(Math.random()*diccionariof.length);
            if(seleccionadosf.includes(azar))
            {
                i--;
                continue;
            }
            seleccionadosf.push(azar);
            seleccionadospalabrasf.push(diccionariof[azar]);
        }

        document.getElementById('palabrasfazar').value =  seleccionadosf.toString();

        document.getElementById('siguientef').addEventListener('click', ()=>{

            [...palabrasf.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabrasfazar').value.split(',')[Number(document.getElementById('itemf').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.append(img2);
            boton3.id="volumenf";
            boton3.setAttribute('palabra', respuestasf[numero])
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/f/')}}/${respuestasf[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionariof[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrasf').append(div1);
            document.getElementById('palabrasf').append(boton);
            document.getElementById('palabrasf').append(div2);
            boton2.textContent = diccionariof[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrasf').append(boton2);
            document.getElementById('palabrasf').append(div3);
            document.getElementById('palabrasf').append(boton3);
            document.getElementById('palabrasf').append(img);
            document.getElementById('itemf').value = Number(document.getElementById('itemf').value)+1;

            if(Number(document.getElementById('itemf').value) == 5)
            {
                document.getElementById('siguientef').setAttribute('disabled', 'disabled')
            }

        })

        document.getElementById('comenzarf').addEventListener('click', ()=>{

            [...palabrasf.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabrasfazar').value.split(',')[Number(document.getElementById('itemf').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.id="volumenf";
            boton3.append(img2);
            boton3.setAttribute('palabra', respuestasf[numero])  
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/f/')}}/${respuestasf[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionariof[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrasf').append(div1);
            document.getElementById('palabrasf').append(boton);
            document.getElementById('palabrasf').append(div2);
            boton2.textContent = diccionariof[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrasf').append(boton2);
            document.getElementById('palabrasf').append(div3);
            document.getElementById('palabrasf').append(boton3);
            document.getElementById('palabrasf').append(img);
            document.getElementById('itemf').value = Number(document.getElementById('itemf').value)+1;

            document.getElementById('comenzarf').setAttribute('disabled', 'disabled');
            document.getElementById('siguientef').removeAttribute('disabled');
        })

        document.getElementById('palabrasf').addEventListener('click', (e)=>{
            
            if(e.target.nodeName == 'BUTTON' && !e.target.classList.contains('volumen'))
            {
                //animaciones cuando se equivoca
                if(document.getElementById('volumenf').getAttribute('palabra') == e.target.textContent)
                {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Excelente',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
                else
                {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }

                let contador=0;
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');

                [...e.target.parentElement.children].map(e =>{

                    if(e.nodeName == "BUTTON" && contador<2)
                    {
                        e.classList.add('disabled');
                        e.setAttribute('disabled', 'disabled');
                        contador++;
                    }

                });
            }
            else if(e.target.nodeName == 'BUTTON' && e.target.classList.contains('volumen'))
            {
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.text = e.target.getAttribute('palabra');
                mensaje.rate = 0.8;
                speechSynthesis.speak(mensaje);
            }
        })

    </script>
    {{-- fin script f --}}

    {{-- script t --}}
    <script>
        let diccionariot = [['tabla', 'fabla'], ['tiempo', 'fiempo'], ['fimbre', 'timbre'], ['tijera', 'fijera'], ['taza', 'laza'], ['leléfono', 'teléfono'], ['lelevisión', 'televisión'], ['terremoto', 'ferremoto'], ['trabajo', 'lrabajo'], ['tren', 'fren'], ['turista', 'furista'], ['fopo', 'topo'], ['tigre', 'ligre'], ['tortuga', 'lorluga'], ['transporte', 'fransporte'], ['lania', 'tania'], ['tiburón', 'fiburón'], ['fexfo', 'texto'], ['temblor', 'lemblor'], ['tormenta', 'formenfa']];
        let respuestast = ['tabla', 'tiempo', 'timbre', 'tijera', 'taza', 'teléfono', 'televisión', 'terremoto', 'trabajo', 'tren', 'turista', 'topo', 'tigre', 'tortuga', 'transporte', 'tania', 'tiburón', 'texto', 'temblor', 'tormenta'];
        let seleccionadost = [];
        let seleccionadospalabrast = [];

        for (let i = 0; i < 5; i++)
        {
            azar = Math.floor(Math.random()*diccionariot.length);
            if(seleccionadost.includes(azar))
            {
                i--;
                continue;
            }
            seleccionadost.push(azar);
            seleccionadospalabrast.push(diccionariot[azar]);
        }

        document.getElementById('palabrastazar').value =  seleccionadost.toString();

        document.getElementById('siguientet').addEventListener('click', ()=>{

            [...palabrast.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabrastazar').value.split(',')[Number(document.getElementById('itemt').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.append(img2);
            boton3.id="volument";
            boton3.setAttribute('palabra', respuestast[numero])
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/t/')}}/${respuestast[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionariot[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrast').append(div1);
            document.getElementById('palabrast').append(boton);
            document.getElementById('palabrast').append(div2);
            boton2.textContent = diccionariot[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrast').append(boton2);
            document.getElementById('palabrast').append(div3);
            document.getElementById('palabrast').append(boton3);
            document.getElementById('palabrast').append(img);
            document.getElementById('itemt').value = Number(document.getElementById('itemt').value)+1;

            if(Number(document.getElementById('itemt').value) == 5)
            {
                document.getElementById('siguientet').setAttribute('disabled', 'disabled')
            }

        })

        document.getElementById('comenzart').addEventListener('click', ()=>{

            [...palabrast.children].map( e => e.remove() );

            let numero = Number(document.getElementById('palabrastazar').value.split(',')[Number(document.getElementById('itemt').value)]); //item elegido que sigue 
            let boton = document.createElement('button');
            let boton2 = document.createElement('button');
            let boton3 = document.createElement('button');
            let div1 = document.createElement('div');
            let div2 = document.createElement('div');
            let div3 = document.createElement('div');
            let img = document.createElement('img');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img.classList.add('d-block', 'm-auto', 'pt-4');
            img.style.height = "236px";
            img.style.width = "210px";
            img2.style.height = "17px";
            img2.style.width = "17px";
            boton3.id="volument";
            boton3.append(img2);
            boton3.setAttribute('palabra', respuestast[numero])  
            boton3.classList.add('col-sm-2', 'col-1', 'volumen')
            img.src= `{{asset('img/ejercicios/ejercicio3/t/')}}/${respuestast[numero]}.jpg`;
            div1.classList.add('col-sm-2', 'col-1');
            div2.classList.add('col-sm-1', 'col-1');
            div3.classList.add('col-sm-1', 'col-1');
            boton.textContent = diccionariot[numero][0];
            boton.classList.add('btn', 'btn-secondary', 'col-sm-3' ,'col-4');
            document.getElementById('palabrast').append(div1);
            document.getElementById('palabrast').append(boton);
            document.getElementById('palabrast').append(div2);
            boton2.textContent = diccionariot[numero][1];
            boton2.classList.add('btn', 'btn-secondary', 'col-sm-3', 'col-4');
            document.getElementById('palabrast').append(boton2);
            document.getElementById('palabrast').append(div3);
            document.getElementById('palabrast').append(boton3);
            document.getElementById('palabrast').append(img);
            document.getElementById('itemt').value = Number(document.getElementById('itemt').value)+1;

            document.getElementById('comenzart').setAttribute('disabled', 'disabled');
            document.getElementById('siguientet').removeAttribute('disabled');
        })

        document.getElementById('palabrast').addEventListener('click', (e)=>{
            
            if(e.target.nodeName == 'BUTTON' && !e.target.classList.contains('volumen'))
            {
                //animaciones cuando se equivoca
                if(document.getElementById('volument').getAttribute('palabra') == e.target.textContent)
                {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Excelente',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }
                else
                {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        timer: 1000
                    })
                }

                let contador=0;
                e.target.setAttribute('disabled', 'disabled');
                e.target.classList.add('disabled', 'bg-primary');

                [...e.target.parentElement.children].map(e =>{

                    if(e.nodeName == "BUTTON" && contador<2)
                    {
                        e.classList.add('disabled');
                        e.setAttribute('disabled', 'disabled');
                        contador++;
                    }

                });
            }
            else if(e.target.nodeName == 'BUTTON' && e.target.classList.contains('volumen'))
            {
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.text = e.target.getAttribute('palabra');
                mensaje.rate = 0.8;
                speechSynthesis.speak(mensaje);
            }
        })

    </script>
    {{-- fin script t --}}
@stop