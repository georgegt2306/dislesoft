@extends('adminlte::page')

@section('title', 'Abecedario')

@section('content_header')
    <h1 class="text-center"><b>Abecedario</b></h1>
@stop

@section('css')
    <style>
        #abecedario > div > button > img
        {
            height: 82px; width: 63px;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }
    </style>
@stop

@section('plugins.Select2', true)

@section('content')

<div class="card card-primary card-outline">
    <div class="card-body" style="background-image: url('{{asset("img/fondo/fondo_escolar.jpg")}}'); width: 100%; height: 100vh; ">
        <div id="abecedario">
            <div class="row" style="display:flex; justify-content: center; align-items: center;">
                <button letra="a"><img letra="a" src="{{asset('img/letras/a.jpg')}}" alt=""></button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <button letra="b"><img letra="b" src="{{asset('img/letras/b.jpg')}}" alt=""></button>
                <button letra="c"><img letra="c" src="{{asset('img/letras/c.jpg')}}" alt=""></button>
                <button letra="d"><img letra="d" src="{{asset('img/letras/d.jpg')}}" alt=""></button>
                <button letra="e"><img letra="e" src="{{asset('img/letras/e.jpg')}}" alt=""></button>
                <button letra="f"><img letra="f" src="{{asset('img/letras/f.jpg')}}" alt=""></button>
                <button letra="g"><img letra="g" src="{{asset('img/letras/g.jpg')}}" alt=""></button>
                <button letra="h"><img letra="h" src="{{asset('img/letras/h.jpg')}}" alt=""></button>
                <button letra="i"><img letra="i" src="{{asset('img/letras/i.jpg')}}" alt=""></button>
            </div>
            <div class="row" style="display:flex; justify-content: center; align-items: center;">
                <button letra="j"><img letra="j" src="{{asset('img/letras/j.jpg')}}" alt=""></button>
                <button letra="k"><img letra="k" src="{{asset('img/letras/k.jpg')}}" alt=""></button>
                <button letra="l"><img letra="l" src="{{asset('img/letras/l.jpg')}}" alt=""></button>
                <button letra="m"><img letra="m" src="{{asset('img/letras/m.jpg')}}" alt=""></button>
                <button letra="n"><img letra="n" src="{{asset('img/letras/n.jpg')}}" alt=""></button>
                <button letra="ñ"><img letra="ñ" src="{{asset('img/letras/ñ.jpg')}}" alt=""></button>
                <button letra="o"><img letra="o" src="{{asset('img/letras/o.jpg')}}" alt=""></button>
                <button letra="p"><img letra="p" src="{{asset('img/letras/p.jpg')}}" alt=""></button>
                <button letra="q"><img letra="q" src="{{asset('img/letras/q.jpg')}}" alt=""></button>
            </div>
            <div class="row" style="display:flex; justify-content: center; align-items: center;">
                <button letra="r"><img letra="r" src="{{asset('img/letras/r.jpg')}}" alt=""></button>
                <button letra="s"><img letra="s" src="{{asset('img/letras/s.jpg')}}" alt=""></button>
                <button letra="t"><img letra="t" src="{{asset('img/letras/t.jpg')}}" alt=""></button>
                <button letra="u"><img letra="u" src="{{asset('img/letras/u.jpg')}}" alt=""></button>
                <button letra="v"><img letra="v" src="{{asset('img/letras/v.jpg')}}" alt=""></button>
                <button letra="w"><img letra="w" src="{{asset('img/letras/w.jpg')}}" alt=""></button>
                <button letra="x"><img letra="x" src="{{asset('img/letras/x.jpg')}}" alt=""></button>
                <button letra="y"><img letra="y" src="{{asset('img/letras/y.jpg')}}" alt=""></button>
                <button letra="z"><img letra="z" src="{{asset('img/letras/z.jpg')}}" alt=""></button>
            </div>
        </div>
    </div>
    <br>
</div>

@stop

@section('js')
    <script>
        document.getElementById('abecedario').addEventListener('click', (e)=>{
            if(e.target.nodeName == 'BUTTON' || e.target.nodeName == 'IMG')
            {
                let mensaje = new SpeechSynthesisUtterance();
                mensaje.voice = speechSynthesis.getVoices()[0];
                mensaje.text = e.target.getAttribute('letra');
                speechSynthesis.speak(mensaje);
            }
        })

    </script>
@stop