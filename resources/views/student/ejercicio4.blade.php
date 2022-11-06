@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 4</b></h1>
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

    </style>
@stop

@section('plugins.Select2', true)

@section('content')

<div class="card card-primary card-outline">
    <input type="hidden" name="palabrasazard" id="palabrasazard">
    <input type="hidden" name="respuestasd" id="respuestasd">
    <input type="hidden" name="itemd" id="itemd" value="0">

    <input type="hidden" name="palabrasazarb" id="palabrasazarb">
    <input type="hidden" name="respuestasb" id="respuestasb">
    <input type="hidden" name="itemb" id="itemb" value="0">

    <input type="hidden" name="palabrasazarp" id="palabrasazarp">
    <input type="hidden" name="respuestasp" id="respuestasp">
    <input type="hidden" name="itemp" id="itemp" value="0">

    <input type="hidden" name="palabrasazarf" id="palabrasazarf">
    <input type="hidden" name="respuestasf" id="respuestasf">
    <input type="hidden" name="itemf" id="itemf" value="0">

    <input type="hidden" name="palabrasazart" id="palabrasazart">
    <input type="hidden" name="respuestast" id="respuestast">
    <input type="hidden" name="itemt" id="itemt" value="0">
    <div class="card-header bg-primary">
        <h2><i class="fas fa-edit"></i>  Elige una letra, observa la imagen y escribe en mayúsculas o minúsculas la sílaba faltante <button class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}" alt=""></button></h2>
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
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#p" role="tab" aria-controls="contact" aria-selected="false"><h2><b>p</b></h2></a>
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
                <button id="calificard" disabled class="btn btn-primary">Calificar</button>
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
                <button id="calificarb" disabled class="btn btn-primary">Calificar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
            </div>
            {{-- fin segundo subitem --}}

            {{-- quinto subitem --}}
            <div class="tab-pane fade" id="p" role="tabpanel" aria-labelledby="contact-tab">
                <br>
                <div id="palabrasp" class="row botones"></div>
                <br>
                <button id="comenzarp" class="btn btn-secondary">Comenzar</button>
                <button id="siguientep" disabled class="btn btn-success">Siguiente</button>
                <button id="calificarp" disabled class="btn btn-primary">Calificar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
            </div>
            {{-- fin quinto subitem --}}

            {{-- septimo subitem --}}
            <div class="tab-pane fade" id="f" role="tabpanel" aria-labelledby="contact-tab">
                <br>
                <div id="palabrasf" class="row botones"></div>
                <br>
                <button id="comenzarf" class="btn btn-secondary">Comenzar</button>
                <button id="siguientef" disabled class="btn btn-success">Siguiente</button>
                <button id="calificarf" disabled class="btn btn-primary">Calificar</button>
                <button class="btn btn-warning reiniciar">Reiniciar</button>
            </div>
            {{-- fin septimo subitem --}}

            {{-- septimo subitem --}}
            <div class="tab-pane fade" id="t" role="tabpanel" aria-labelledby="contact-tab">
                <br>
                <div id="palabrast" class="row botones"></div>
                <br>
                <button id="comenzart" class="btn btn-secondary">Comenzar</button>
                <button id="siguientet" disabled class="btn btn-success">Siguiente</button>
                <button id="calificart" disabled class="btn btn-primary">Calificar</button>
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
        document.getElementById('itemp').value = 0;
        document.getElementById('itemf').value = 0;
        document.getElementById('itemt').value = 0;

        document.getElementById('siguiented').setAttribute('disabled', 'disabled');
        document.getElementById('siguienteb').setAttribute('disabled', 'disabled');
        document.getElementById('siguientep').setAttribute('disabled', 'disabled');
        document.getElementById('siguientef').setAttribute('disabled', 'disabled');
        document.getElementById('siguientet').setAttribute('disabled', 'disabled');

        document.getElementById('calificard').setAttribute('disabled', 'disabled');
        document.getElementById('calificarb').setAttribute('disabled', 'disabled');
        document.getElementById('calificarp').setAttribute('disabled', 'disabled');
        document.getElementById('calificarf').setAttribute('disabled', 'disabled');
        document.getElementById('calificart').setAttribute('disabled', 'disabled');

        function pronunciar(id){
            let mensaje = new SpeechSynthesisUtterance();
            mensaje.voice = speechSynthesis.getVoices()[0];
            mensaje.text = document.getElementById(id).getAttribute('palabra');
            mensaje.rate = 0.8;
            speechSynthesis.speak(mensaje);
        }

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
        let palabrascompletasd = ['dentista', 'dinero', 'delgado', 'dinosaurio', 'doncella', 'desierto', 'deporte', 'desfile', 'durazno', 'dormitorio', 'documento', 'discoteca', 'dormir', 'disculpa', 'docente', 'derretir', 'ducha', 'desayuno', 'diploma'];
        let palabrasd = ['ntista', 'nero', 'lgado', 'nosaurio', 'ncella', 'sierto', 'porte', 'sfile', 'razno', 'rmitorio', 'cumento', 'scoteca', 'rmir', 'sculpa', 'cente', 'rretir', 'cha', 'sayuno', 'ploma'];
        let faltantesd = ['de', 'di', 'de', 'di', 'do', 'de', 'de', 'de', 'du', 'do', 'do', 'di', 'do', 'di', 'do', 'de', 'du', 'de', 'di'];
        let seleccionadosd = [];

        for (let i = 0; i < 5; i++)
        {
            azar = Math.floor(Math.random()*palabrasd.length);
            if(seleccionadosd.includes(azar))
            {
                i--;
                continue;
            }
            seleccionadosd.push(azar);
        }

        document.getElementById('palabrasazard').value =  seleccionadosd.toString();

        document.getElementById('comenzard').addEventListener('click', ()=>{

            [...document.getElementById('palabrasd').children].map(e => e.remove());
            let numero = Number(document.getElementById('palabrasazard').value.split(',')[Number(document.getElementById('itemd').value)]);
            let div1 = document.createElement('div');
            div1.classList.add('col-sm-5', 'col-4');
            let div2 = document.createElement('div');
            div2.classList.add('col-6', 'row');
            let input = document.createElement('input');
            input.id="inputd";
            input.classList.add('col-2', 'col-sm-1', 'form-control');
            let label = document.createElement('label');
            label.id="labeld";
            label.textContent = palabrasd[numero];
            label.classList.add('col-5');
            div1.append(input);
            div1.append(label);
            let img = document.createElement('img');

            let button = document.createElement('button');
            button.id="volumend";
            button.setAttribute('onclick', "pronunciar('volumend')")
            button.setAttribute('palabra', palabrascompletasd[numero]);
            button.classList.add('col-1');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img2.style.height = "10px";
            img2.style.width = "10px";
            button.append(img2);

            img.classList.add('m-auto', 'pt-1');
            img.src = `{{asset('img/ejercicios/ejercicio3/d/')}}/${palabrascompletasd[numero]}.jpg`;
            img.style.height = "236px";
            img.style.width = "210px";
            div2.append(img);
            document.getElementById('palabrasd').append(div1);
            document.getElementById('palabrasd').append(input);
            document.getElementById('palabrasd').append(label);
            document.getElementById('palabrasd').append(button);
            document.getElementById('palabrasd').append(img);

            document.getElementById('itemd').value = Number(document.getElementById('itemd').value)+1;

            document.getElementById('comenzard').setAttribute('disabled', 'disabled');
            document.getElementById('siguiented').removeAttribute('disabled');
            document.getElementById('calificard').removeAttribute('disabled');
        })

        document.getElementById('siguiented').addEventListener('click', ()=>{

            [...document.getElementById('palabrasd').children].map(e => e.remove());
            let numero = Number(document.getElementById('palabrasazard').value.split(',')[Number(document.getElementById('itemd').value)]);
            let div1 = document.createElement('div');
            div1.classList.add('col-sm-5', 'col-4');
            let div2 = document.createElement('div');
            div2.classList.add('col-6', 'row');
            let input = document.createElement('input');
            input.id="inputd";
            input.classList.add('col-2', 'col-sm-1', 'form-control');
            let label = document.createElement('label');
            label.textContent = palabrasd[numero];
            label.classList.add('col-5');
            label.id="labeld";
            div1.append(input);
            div1.append(label);
            let img = document.createElement('img');

            let button = document.createElement('button');
            button.id="volumend";
            button.setAttribute('onclick', "pronunciar('volumend')")
            button.setAttribute('palabra', palabrascompletasd[numero]);
            button.classList.add('col-1');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img2.style.height = "10px";
            img2.style.width = "10px";
            button.append(img2);

            img.classList.add('m-auto', 'pt-1');
            img.src = `{{asset('img/ejercicios/ejercicio3/d/')}}/${palabrascompletasd[numero]}.jpg`;
            img.style.height = "236px";
            img.style.width = "210px";
            div2.append(img);
            document.getElementById('palabrasd').append(div1);
            document.getElementById('palabrasd').append(input);
            document.getElementById('palabrasd').append(label);
            document.getElementById('palabrasd').append(button);
            document.getElementById('palabrasd').append(img);

            document.getElementById('itemd').value = Number(document.getElementById('itemd').value)+1;

            if(Number(document.getElementById('itemd').value) == 5)
            {
                document.getElementById('siguiented').setAttribute('disabled', 'disabled');
            }
        })

        document.getElementById('calificard').addEventListener('click', ()=>{

            document.getElementById('inputd').setAttribute('disabled', 'disabled');
            if(`${document.getElementById('inputd').value}${document.getElementById('labeld').textContent}` == document.getElementById('volumend').getAttribute('palabra'))
            {
                document.getElementById('inputd').classList.add('is-valid');
            }
            else
            {
                document.getElementById('inputd').classList.add('is-invalid');
            }
            
        });

    </script>
    {{-- fin script d --}}

    {{-- script b --}}
    <script>
        let palabrascompletasb = ['burro', 'bailar', 'bacteria', 'banana', 'bandera', 'baño', 'balcon', 'beso', 'bermuda', 'biblioteca', 'billetera', 'biberon', 'bombon', 'bufalo', 'burbuja', 'botella', 'bolso', 'binario', 'bellota', 'bateria'];
        let palabrasb = ['rro', 'ilar', 'cteria', 'nana', 'ndera', 'ño', 'lcon', 'so', 'rmuda', 'blioteca', 'lletera', 'beron', 'mbon', 'falo', 'rbuja', 'tella', 'lso', 'nario', 'llota', 'cteria'];
        let faltantesb = ['bu', 'ba', 'ba', 'ba', 'ba', 'ba', 'ba', 'be', 'be', 'bi', 'bi', 'bi', 'bo', 'bu', 'bu', 'bo', 'bo', 'bi', 'be', 'ba'];
        let seleccionadosb = [];

        for (let i = 0; i < 5; i++)
        {
            azar = Math.floor(Math.random()*palabrasb.length);
            if(seleccionadosb.includes(azar))
            {
                i--;
                continue;
            }
            seleccionadosb.push(azar);
        }

        document.getElementById('palabrasazarb').value =  seleccionadosb.toString();

        document.getElementById('comenzarb').addEventListener('click', ()=>{

            [...document.getElementById('palabrasb').children].map(e => e.remove());
            let numero = Number(document.getElementById('palabrasazarb').value.split(',')[Number(document.getElementById('itemb').value)]);
            let div1 = document.createElement('div');
            div1.classList.add('col-sm-5', 'col-4');
            let div2 = document.createElement('div');
            div2.classList.add('col-6', 'row');
            let input = document.createElement('input');
            input.id="inputb";
            input.classList.add('col-2', 'col-sm-1', 'form-control');
            let label = document.createElement('label');
            label.id="labelb";
            label.textContent = palabrasb[numero];
            label.classList.add('col-5');
            div1.append(input);
            div1.append(label);
            let img = document.createElement('img');

            let button = document.createElement('button');
            button.id="volumenb";
            button.setAttribute('onclick', "pronunciar('volumenb')")
            button.setAttribute('palabra', palabrascompletasb[numero]);
            button.classList.add('col-1');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img2.style.height = "10px";
            img2.style.width = "10px";
            button.append(img2);

            img.classList.add('m-auto', 'pt-1');
            img.src = `{{asset('img/ejercicios/ejercicio3/b/')}}/${palabrascompletasb[numero]}.jpg`;
            img.style.height = "236px";
            img.style.width = "210px";
            div2.append(img);
            document.getElementById('palabrasb').append(div1);
            document.getElementById('palabrasb').append(input);
            document.getElementById('palabrasb').append(label);
            document.getElementById('palabrasb').append(button);
            document.getElementById('palabrasb').append(img);

            document.getElementById('itemb').value = Number(document.getElementById('itemb').value)+1;

            document.getElementById('comenzarb').setAttribute('disabled', 'disabled');
            document.getElementById('siguienteb').removeAttribute('disabled');
            document.getElementById('calificarb').removeAttribute('disabled');
        })

        document.getElementById('siguienteb').addEventListener('click', ()=>{

            [...document.getElementById('palabrasb').children].map(e => e.remove());
            let numero = Number(document.getElementById('palabrasazarb').value.split(',')[Number(document.getElementById('itemb').value)]);
            let div1 = document.createElement('div');
            div1.classList.add('col-sm-5', 'col-4');
            let div2 = document.createElement('div');
            div2.classList.add('col-6', 'row');
            let input = document.createElement('input');
            input.id="inputb";
            input.classList.add('col-2', 'col-sm-1', 'form-control');
            let label = document.createElement('label');
            label.textContent = palabrasb[numero];
            label.classList.add('col-5');
            label.id="labelb";
            div1.append(input);
            div1.append(label);
            let img = document.createElement('img');

            let button = document.createElement('button');
            button.id="volumenb";
            button.setAttribute('onclick', "pronunciar('volumenb')")
            button.setAttribute('palabra', palabrascompletasb[numero]);
            button.classList.add('col-1');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img2.style.height = "10px";
            img2.style.width = "10px";
            button.append(img2);

            img.classList.add('m-auto', 'pt-1');
            img.src = `{{asset('img/ejercicios/ejercicio3/b/')}}/${palabrascompletasb[numero]}.jpg`;
            img.style.height = "236px";
            img.style.width = "210px";
            div2.append(img);
            document.getElementById('palabrasb').append(div1);
            document.getElementById('palabrasb').append(input);
            document.getElementById('palabrasb').append(label);
            document.getElementById('palabrasb').append(button);
            document.getElementById('palabrasb').append(img);

            document.getElementById('itemb').value = Number(document.getElementById('itemb').value)+1;

            if(Number(document.getElementById('itemb').value) == 5)
            {
                document.getElementById('siguienteb').setAttribute('disabled', 'disabled');
            }
        })

        document.getElementById('calificarb').addEventListener('click', ()=>{

            document.getElementById('inputb').setAttribute('disabled', 'disabled');
            if(`${document.getElementById('inputb').value}${document.getElementById('labelb').textContent}` == document.getElementById('volumenb').getAttribute('palabra'))
            {
                document.getElementById('inputb').classList.add('is-valid');
            }
            else
            {
                document.getElementById('inputb').classList.add('is-invalid');
            }

        });
    </script>
    {{-- fin script b --}}

    {{-- script p --}}
    <script>
        let palabrascompletasp = ['pirámide', 'piano', 'pastel', 'plantas', 'pulmón', 'policía', 'político', 'peleador', 'pueblo', 'pozo', 'pequeño', 'puerto', 'primavera', 'palabra', 'picante', 'perfume', 'pirata', 'planeta', 'prisión', 'persona'];
        let palabrasp = ['rámide', 'ano', 'stel', 'ntas', 'lmón', 'licía', 'lítico', 'leador', 'eblo', 'zo', 'queño', 'erto', 'mavera', 'labra', 'cante', 'rfume', 'rata', 'neta', 'sión', 'rsona'];
        let faltantesp = ['pi', 'pi', 'pa', 'pla', 'pu', 'po', 'po', 'pe', 'pu', 'po', 'pe', 'pu', 'pri', 'pa', 'pi', 'pe', 'pi', 'pla', 'pri', 'pe'];
        let seleccionadosp = [];

        for (let i = 0; i < 5; i++)
        {
            azar = Math.floor(Math.random()*palabrasp.length);
            if(seleccionadosp.includes(azar))
            {
                i--;
                continue;
            }
            seleccionadosp.push(azar);
        }

        document.getElementById('palabrasazarp').value =  seleccionadosp.toString();

        document.getElementById('comenzarp').addEventListener('click', ()=>{

            [...document.getElementById('palabrasp').children].map(e => e.remove());
            let numero = Number(document.getElementById('palabrasazarp').value.split(',')[Number(document.getElementById('itemp').value)]);
            let div1 = document.createElement('div');
            div1.classList.add('col-sm-5', 'col-4');
            let div2 = document.createElement('div');
            div2.classList.add('col-6', 'row');
            let input = document.createElement('input');
            input.id="inputp";
            input.classList.add('col-2', 'col-sm-1', 'form-control');
            let label = document.createElement('label');
            label.id="labelp";
            label.textContent = palabrasp[numero];
            label.classList.add('col-5');
            div1.append(input);
            div1.append(label);
            let img = document.createElement('img');

            let button = document.createElement('button');
            button.id="volumenp";
            button.setAttribute('onclick', "pronunciar('volumenp')")
            button.setAttribute('palabra', palabrascompletasp[numero]);
            button.classList.add('col-1');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img2.style.height = "10px";
            img2.style.width = "10px";
            button.append(img2);

            img.classList.add('m-auto', 'pt-1');
            img.src = `{{asset('img/ejercicios/ejercicio3/p/')}}/${palabrascompletasp[numero]}.jpg`;
            img.style.height = "236px";
            img.style.width = "210px";
            div2.append(img);
            document.getElementById('palabrasp').append(div1);
            document.getElementById('palabrasp').append(input);
            document.getElementById('palabrasp').append(label);
            document.getElementById('palabrasp').append(button);
            document.getElementById('palabrasp').append(img);

            document.getElementById('itemp').value = Number(document.getElementById('itemp').value)+1;

            document.getElementById('comenzarp').setAttribute('disabled', 'disabled');
            document.getElementById('siguientep').removeAttribute('disabled');
            document.getElementById('calificarp').removeAttribute('disabled');
        })

        document.getElementById('siguientep').addEventListener('click', ()=>{

            [...document.getElementById('palabrasp').children].map(e => e.remove());
            let numero = Number(document.getElementById('palabrasazarp').value.split(',')[Number(document.getElementById('itemp').value)]);
            let div1 = document.createElement('div');
            div1.classList.add('col-sm-5', 'col-4');
            let div2 = document.createElement('div');
            div2.classList.add('col-6', 'row');
            let input = document.createElement('input');
            input.id="inputp";
            input.classList.add('col-2', 'col-sm-1', 'form-control');
            let label = document.createElement('label');
            label.textContent = palabrasp[numero];
            label.classList.add('col-5');
            label.id="labelp";
            div1.append(input);
            div1.append(label);
            let img = document.createElement('img');

            let button = document.createElement('button');
            button.id="volumenp";
            button.setAttribute('onclick', "pronunciar('volumenp')")
            button.setAttribute('palabra', palabrascompletasp[numero]);
            button.classList.add('col-1');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img2.style.height = "10px";
            img2.style.width = "10px";
            button.append(img2);

            img.classList.add('m-auto', 'pt-1');
            img.src = `{{asset('img/ejercicios/ejercicio3/p/')}}/${palabrascompletasp[numero]}.jpg`;
            img.style.height = "236px";
            img.style.width = "210px";
            div2.append(img);
            document.getElementById('palabrasp').append(div1);
            document.getElementById('palabrasp').append(input);
            document.getElementById('palabrasp').append(label);
            document.getElementById('palabrasp').append(button);
            document.getElementById('palabrasp').append(img);

            document.getElementById('itemp').value = Number(document.getElementById('itemp').value)+1;

            if(Number(document.getElementById('itemp').value) == 5)
            {
                document.getElementById('siguientep').setAttribute('disabled', 'disabled');
            }
        })

        document.getElementById('calificarp').addEventListener('click', ()=>{

            document.getElementById('inputp').setAttribute('disabled', 'disabled');
            if(`${document.getElementById('inputp').value}${document.getElementById('labelp').textContent}` == document.getElementById('volumenp').getAttribute('palabra'))
            {
                document.getElementById('inputp').classList.add('is-valid');
            }
            else
            {
                document.getElementById('inputp').classList.add('is-invalid');
            }

        });
    </script>
    {{-- fin script p --}}

    {{-- script f --}}
    <script>
        let palabrascompletasf = ['foco', 'fútbol', 'fresa', 'frasco', 'flaco', 'factura', 'foto', 'famoso', 'farmacia', 'feliz', 'francia', 'fruta', 'fábrica', 'funda', 'fuerte', 'fuente', 'fernando', 'fósforo'];
        let palabrasf = ['co', 'tbol', 'sa', 'asco', 'co', 'ctura', 'to', 'moso', 'rmacia', 'liz', 'ncia', 'ta', 'brica', 'nda', 'erte', 'ente', 'rnando', 'sforo'];
        let faltantesf = ['fo', 'fú', 'fre','fra', 'fla', 'fa', 'fo', 'fa', 'fa', 'fe', 'fra', 'fru', 'fá', 'fu', 'fu', 'fu', 'fe', 'fó'];
        let seleccionadosf = [];

        for (let i = 0; i < 5; i++)
        {
            azar = Math.floor(Math.random()*palabrasf.length);
            if(seleccionadosf.includes(azar))
            {
                i--;
                continue;
            }
            seleccionadosf.push(azar);
        }

        document.getElementById('palabrasazarf').value =  seleccionadosf.toString();

        document.getElementById('comenzarf').addEventListener('click', ()=>{

            [...document.getElementById('palabrasf').children].map(e => e.remove());
            let numero = Number(document.getElementById('palabrasazarf').value.split(',')[Number(document.getElementById('itemf').value)]);
            let div1 = document.createElement('div');
            div1.classList.add('col-sm-5', 'col-4');
            let div2 = document.createElement('div');
            div2.classList.add('col-6', 'row');
            let input = document.createElement('input');
            input.id="inputf";
            input.classList.add('col-2', 'col-sm-1', 'form-control');
            let label = document.createElement('label');
            label.id="labelf";
            label.textContent = palabrasf[numero];
            label.classList.add('col-5');
            div1.append(input);
            div1.append(label);
            let img = document.createElement('img');

            let button = document.createElement('button');
            button.id="volumenf";
            button.setAttribute('onclick', "pronunciar('volumenf')")
            button.setAttribute('palabra', palabrascompletasf[numero]);
            button.classList.add('col-1');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img2.style.height = "10px";
            img2.style.width = "10px";
            button.append(img2);

            img.classList.add('m-auto', 'pt-1');
            img.src = `{{asset('img/ejercicios/ejercicio3/f/')}}/${palabrascompletasf[numero]}.jpg`;
            img.style.height = "236px";
            img.style.width = "210px";
            div2.append(img);
            document.getElementById('palabrasf').append(div1);
            document.getElementById('palabrasf').append(input);
            document.getElementById('palabrasf').append(label);
            document.getElementById('palabrasf').append(button);
            document.getElementById('palabrasf').append(img);

            document.getElementById('itemf').value = Number(document.getElementById('itemf').value)+1;

            document.getElementById('comenzarf').setAttribute('disabled', 'disabled');
            document.getElementById('siguientef').removeAttribute('disabled');
            document.getElementById('calificarf').removeAttribute('disabled');
        })

        document.getElementById('siguientef').addEventListener('click', ()=>{

            [...document.getElementById('palabrasf').children].map(e => e.remove());
            let numero = Number(document.getElementById('palabrasazarf').value.split(',')[Number(document.getElementById('itemf').value)]);
            let div1 = document.createElement('div');
            div1.classList.add('col-sm-5', 'col-4');
            let div2 = document.createElement('div');
            div2.classList.add('col-6', 'row');
            let input = document.createElement('input');
            input.id="inputf";
            input.classList.add('col-2', 'col-sm-1', 'form-control');
            let label = document.createElement('label');
            label.textContent = palabrasf[numero];
            label.classList.add('col-5');
            label.id="labelf";
            div1.append(input);
            div1.append(label);
            let img = document.createElement('img');

            let button = document.createElement('button');
            button.id="volumenf";
            button.setAttribute('onclick', "pronunciar('volumenf')")
            button.setAttribute('palabra', palabrascompletasf[numero]);
            button.classList.add('col-1');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img2.style.height = "10px";
            img2.style.width = "10px";
            button.append(img2);

            img.classList.add('m-auto', 'pt-1');
            img.src = `{{asset('img/ejercicios/ejercicio3/f/')}}/${palabrascompletasf[numero]}.jpg`;
            img.style.height = "236px";
            img.style.width = "210px";
            div2.append(img);
            document.getElementById('palabrasf').append(div1);
            document.getElementById('palabrasf').append(input);
            document.getElementById('palabrasf').append(label);
            document.getElementById('palabrasf').append(button);
            document.getElementById('palabrasf').append(img);

            document.getElementById('itemf').value = Number(document.getElementById('itemf').value)+1;

            if(Number(document.getElementById('itemf').value) == 5)
            {
                document.getElementById('siguientef').setAttribute('disabled', 'disabled');
            }
        })

        document.getElementById('calificarf').addEventListener('click', ()=>{

            document.getElementById('inputf').setAttribute('disabled', 'disabled');
            if(`${document.getElementById('inputf').value}${document.getElementById('labelf').textContent}` == document.getElementById('volumenf').getAttribute('palabra'))
            {
                document.getElementById('inputf').classList.add('is-valid');
            }
            else
            {
                document.getElementById('inputf').classList.add('is-invalid');
            }

        });

    </script>
    {{-- fin script f --}}

    {{-- script t --}}
    <script>
        let palabrascompletast = ['tabla', 'tiempo', 'timbre', 'tijera', 'taza', 'teléfono', 'televisión', 'terremoto', 'trabajo', 'tren', 'turista', 'topo', 'tigre', 'tortuga', 'transporte', 'tania', 'tiburón', 'texto', 'temblor', 'tormenta'];
        let palabrast = ['bla', 'empo', 'mbre', 'jera', 'za', 'léfono', 'levisión', 'rremoto', 'bajo', 'n', 'rista', 'po', 'gre', 'rtuga', 'nsporte', 'nia', 'burón', 'xto', 'mblor', 'rmenta'];
        let faltantest = ['ta', 'ti', 'ti', 'ti', 'ta', 'te', 'te', 'te', 'tra', 'tre', 'tu', 'to', 'ti', 'to', 'tra', 'ta', 'ti', 'te', 'te', 'to'];
        let seleccionadost = [];

        for (let i = 0; i < 5; i++)
        {
            azar = Math.floor(Math.random()*palabrast.length);
            if(seleccionadost.includes(azar))
            {
                i--;
                continue;
            }
            seleccionadost.push(azar);
        }

        document.getElementById('palabrasazart').value =  seleccionadost.toString();

        document.getElementById('comenzart').addEventListener('click', ()=>{

            [...document.getElementById('palabrast').children].map(e => e.remove());
            let numero = Number(document.getElementById('palabrasazart').value.split(',')[Number(document.getElementById('itemt').value)]);
            let div1 = document.createElement('div');
            div1.classList.add('col-sm-5', 'col-4');
            let div2 = document.createElement('div');
            div2.classList.add('col-6', 'row');
            let input = document.createElement('input');
            input.id="inputt";
            input.classList.add('col-2', 'col-sm-1', 'form-control');
            let label = document.createElement('label');
            label.id="labelt";
            label.textContent = palabrast[numero];
            label.classList.add('col-5');
            div1.append(input);
            div1.append(label);
            let img = document.createElement('img');

            let button = document.createElement('button');
            button.id="volument";
            button.setAttribute('onclick', "pronunciar('volument')")
            button.setAttribute('palabra', palabrascompletast[numero]);
            button.classList.add('col-1');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img2.style.height = "10px";
            img2.style.width = "10px";
            button.append(img2);

            img.classList.add('m-auto', 'pt-1');
            img.src = `{{asset('img/ejercicios/ejercicio3/t/')}}/${palabrascompletast[numero]}.jpg`;
            img.style.height = "236px";
            img.style.width = "210px";
            div2.append(img);
            document.getElementById('palabrast').append(div1);
            document.getElementById('palabrast').append(input);
            document.getElementById('palabrast').append(label);
            document.getElementById('palabrast').append(button);
            document.getElementById('palabrast').append(img);

            document.getElementById('itemt').value = Number(document.getElementById('itemt').value)+1;

            document.getElementById('comenzart').setAttribute('disabled', 'disabled');
            document.getElementById('siguientet').removeAttribute('disabled');
            document.getElementById('calificart').removeAttribute('disabled');
        })

        document.getElementById('siguientet').addEventListener('click', ()=>{

            [...document.getElementById('palabrast').children].map(e => e.remove());
            let numero = Number(document.getElementById('palabrasazart').value.split(',')[Number(document.getElementById('itemt').value)]);
            let div1 = document.createElement('div');
            div1.classList.add('col-sm-5', 'col-4');
            let div2 = document.createElement('div');
            div2.classList.add('col-6', 'row');
            let input = document.createElement('input');
            input.id="inputt";
            input.classList.add('col-2', 'col-sm-1', 'form-control');
            let label = document.createElement('label');
            label.textContent = palabrast[numero];
            label.classList.add('col-5');
            label.id="labelt";
            div1.append(input);
            div1.append(label);
            let img = document.createElement('img');

            let button = document.createElement('button');
            button.id="volument";
            button.setAttribute('onclick', "pronunciar('volument')")
            button.setAttribute('palabra', palabrascompletast[numero]);
            button.classList.add('col-1');
            let img2 = document.createElement('img');
            img2.src = `{{asset('iconos/volumen.png')}}`;
            img2.style.height = "10px";
            img2.style.width = "10px";
            button.append(img2);

            img.classList.add('m-auto', 'pt-1');
            img.src = `{{asset('img/ejercicios/ejercicio3/t/')}}/${palabrascompletast[numero]}.jpg`;
            img.style.height = "236px";
            img.style.width = "210px";
            div2.append(img);
            document.getElementById('palabrast').append(div1);
            document.getElementById('palabrast').append(input);
            document.getElementById('palabrast').append(label);
            document.getElementById('palabrast').append(button);
            document.getElementById('palabrast').append(img);

            document.getElementById('itemt').value = Number(document.getElementById('itemt').value)+1;

            if(Number(document.getElementById('itemt').value) == 5)
            {
                document.getElementById('siguientet').setAttribute('disabled', 'disabled');
            }
        })

        document.getElementById('calificart').addEventListener('click', ()=>{

            document.getElementById('inputt').setAttribute('disabled', 'disabled');
            if(`${document.getElementById('inputt').value}${document.getElementById('labelt').textContent}` == document.getElementById('volument').getAttribute('palabra'))
            {
                document.getElementById('inputt').classList.add('is-valid');
            }
            else
            {
                document.getElementById('inputt').classList.add('is-invalid');
            }

        });
    </script>
    {{-- fin script t --}}
@stop