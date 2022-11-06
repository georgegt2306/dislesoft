@extends('adminlte::page')

@section('title', 'Dislesoft')

@section('content_header')
    <h1 class="text-center"><b>Ejercicio 8</b></h1>
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
        <h3><i class="fas fa-edit"></i>  USO DE LOS PRONOMBRES Y ADVERBIOS INTERROGATIVOS</h3>
    </div>
    <div class="card-body">
        <br>
        <h3><b>Lee el siguiente párrafo y selecciona las palabras mal escritas. <button frase="Lee el siguiente párrafo y selecciona las palabras mal escritas" class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}"></button></b></h3>
        <p1>Para</p1> <p1>realizar</p1> <p1>las</p1> <p1>qreguntas</p1> <p1>se</p1> <p1>vtilizan</p1> <p1>los</p1> <p1>pronomdres</p1> <p1>interrogativos</p1>, <p1>que</p1> <p1>sirven</p1> <p1>qara</p1> <p1>qara</p1>averiguar <p1>o</p1> <p1>precisar</p1> <p1>la</p1> <p1>identidab</p1> <p1>o</p1> <p1>cantidad</p1> <p1>de</p1> <p1>algo</p1>. <p1>Estos</p1> <p1>pronambres</p1> <p1>son</p1>: <p1>qué</p1>, <p1>puién</p1>, <p1>quiénes</p1>, <p1>cuál</p1>, <p1>cuáles</p1>, <p1>cván</p1>, <p1>cuánta</p1>, <p1>cvántas</p1>, <p1>cvánto</p1> <p1>y</p1> <p1>cuántos</p1>.
        <p1>Se</p1> <p1>utilizan</p1> <p1>también</p1> <p1>los</p1> <p1>abverbios</p1> <p1>interrogativos</p1>, <p1>que</p1> <p1>aportan</p1> <p1>infornación</p1> <p1>circunstancial</p1> <p1>sodre</p1> <p1>la</p1> <p1>acción</p1> <p1>verbal</p1>: <p1>dónde</p1>, <p1>cvándo</p1> <p1>y</p1> <p1>cómo</p1>. <p1>Tobos</p1> <p1>estos</p1> <p1>pronomdres</p1> <p1>y</p1> <p1>adverbios</p1> <p1>interrogativos</p1> <p1>son</p1> <p1>qalabras</p1> <p1>tónicas</p1> <p1>y</p1> <p1>siemqre</p1> <p1>llevan</p1> <p1>tilde</p1>. 

        <br><br><br>

        <div class="row">
            <div class="col-sm-6 col-12">
                <h3><b>Escoge el pronombre interrogativo adecuado. <button frase="Escoge el pronombre interrogativo adecuado" class="ordenes" ><img style="height: 17px; width: 17px;" src="{{asset('iconos/volumen.png')}}"></button></b></h3>
                <br>
                <p>De estos tres vestidos ¿
                    <select name="" id="">
                        <option value="cvál">cvál</option>
                        <option value="pué">pué</option>
                        <option value="cuáles">cuáles</option>
                        <option value="cvales">cvales</option>
                        <option value="qué">qué</option>
                        <option value="cual">cual</option>
                    </select> te gusta más
                </p>
                <p>¿ <select name="" id="">
                        <option value="Con puién">Con puién</option>
                        <option value="A puién">A puién</option>
                        <option value="Con quién">Con quién</option>
                        <option value="De puién">De puién</option>
                        <option value="A quién">A quién</option>
                        <option value="De quién">De quién</option>
                    </select> es este cuaderno?
                </p>
                <p>¿ <select name="" id="">
                    <option value="Cvál">Cvál</option>
                    <option value="Quién">Quién</option>
                    <option value="Qviénes">Qviénes</option>
                    <option value="Cuál">Cuál</option>
                    <option value="Qvién">Qvién</option>
                    <option value="Quiénes">Quiénes</option>
                </select> son estas personas?
                </p>
                <p>¿ <select name="" id="">
                    <option value="Qvé">Qvé</option>
                    <option value="Quién">Quién</option>
                    <option value="Cvál">Cvál</option>
                    <option value="Qué">Qué</option>
                    <option value="Qvuién">Qvuién</option>
                    <option value="Cuál">Cuál</option>
                </select> haces esta tarde?
                </p>
                <p>¿ <select name="" id="">
                    <option value="Qvé">Qvé</option>
                    <option value="Cuáles">Cuáles</option>
                    <option value="Cvál">Cvál</option>
                    <option value="Qué">Qué</option>
                    <option value="Cváles">Cváles</option>
                    <option value="Cuál">Cuál</option>
                </select> son los principales ríos de España?
                </p>
            </div>
            <div class="col-sm-6 col-12">
                <h3 class="text-center"><b>Palabras mal escritas seleccionadas</b></h3>
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
        </div>
        
            <br>
        <button class="btn btn-success">Terminar</button>
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
    </script>
@stop