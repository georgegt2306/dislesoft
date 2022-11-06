<?php

namespace App\Http\Controllers;

use App\Models\NotasEjercicios;
use ErrorException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Unidad1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function u1ejercicio1()
    {
        $nota_mayor = DB::table('notas_ejercicios')->where([ ['user_id',Auth::id()], ['unidad_id',1], ['ejercicio',1] ])->max('nota');
        $palabras_incorrectas = ['ayenturas', 'argvmento', 'qeripecias', 'qrotagonistas', 'nisteriosos', 'Puebe', 'hisfóricos', 'qero', 'avenfuras', 'svcesos'];
        $notas_ejercicio = NotasEjercicios::where([ ['user_id',Auth::id()], ['unidad_id',1], ['ejercicio',1] ])->whereNull('deleted_at')->get();
        $nota_temporal = 0;
        $respuesta_temporal = '';
        $boton_restaurar_nota = false;

        if(sizeof($notas_ejercicio) == 0)
        {
            return view('student.u1ejercicio1');
        }
        else
        {
            $respuesta_temporal = $notas_ejercicio[0]->respuesta;

            $respuesta_temporal = str_replace(']', '', $respuesta_temporal);
            $respuesta_temporal = str_replace('[', '', $respuesta_temporal);
            $respuesta_temporal = str_replace('"', '', $respuesta_temporal);

            $respuesta_temporal = explode(',', $respuesta_temporal);

            $nota_temporal = $notas_ejercicio[0]->nota;

            if($nota_mayor>$nota_temporal) $boton_restaurar_nota = true;

            return view('student.calificados.unidad1.ejercicio1', compact('nota_temporal', 'respuesta_temporal', 'palabras_incorrectas', 'boton_restaurar_nota'));
        }

        
    }

    public function u1ejercicio1_guardar(Request $request)
    {
        $palabras_incorrectas = ['ayenturas', 'argvmento', 'qeripecias', 'qrotagonistas', 'nisteriosos', 'Puebe', 'hisfóricos', 'qero', 'avenfuras', 'svcesos'];
        $nota = 0;
        $respuesta = ($request->respuesta == NULL) ? '' : $request->respuesta;
        $respuesta_iterable = json_decode($respuesta);

        if($request->respuesta != NULL)
        {
            foreach($respuesta_iterable as $respuestas)
            {
                if(in_array($respuestas, $palabras_incorrectas))
                {
                    $nota++;
                }
            }
        }

        NotasEjercicios::create([
            'ejercicio' => 1,
            'nota' => $nota,
            'respuesta' => $respuesta,
            'user_id' => Auth::id(),
            'unidad_id' => 1
        ]);

        return response()->json(['sms' => 'ok', 'nota' => $nota]);

    }

    public function u1ejercicio2()
    {
        $notas_ejercicio = NotasEjercicios::where([ ['user_id',Auth::id()], ['unidad_id',1], ['ejercicio',2] ])->get(); //todos los ejercicios
        $palabras_correctas = ['nudo', 'introducción', 'acontecimiento inicial', 'desenlace'];
        $nota_temporal = 0;
        $respuesta_temporal = '';
        $vueltas = 0;

        if(sizeof($notas_ejercicio)>0)
        {
            if(sizeof($notas_ejercicio)>1)
            {
                foreach($notas_ejercicio as $ejercicio)
                {
                    if($vueltas == 0)
                    {
                        $nota_temporal = (float)$ejercicio->nota;
                        $respuesta_temporal = $ejercicio->respuesta;
                    }

                    if((float)$ejercicio->nota > (float)$nota_temporal)
                    {
                        $nota_temporal = (float)$ejercicio->nota;
                        $respuesta_temporal = $ejercicio->respuesta;
                    }
                    $vueltas++;
                }
            }
            else
            {
                $nota_temporal = (float)$notas_ejercicio[0]->nota;
                $respuesta_temporal = $notas_ejercicio[0]->respuesta;
            }

            $respuesta_temporal = str_replace('[', '', $respuesta_temporal);
            $respuesta_temporal = str_replace(']', '', $respuesta_temporal);
            $respuesta_temporal = str_replace('"', '', $respuesta_temporal);
            $respuesta_temporal = explode(',',$respuesta_temporal);

            return view('student.calificados.unidad1.ejercicio2', compact('nota_temporal', 'respuesta_temporal', 'palabras_correctas'));
        }

        return view('student.u1ejercicio2');

    }

    public function u1ejercicio2_guardar(Request $request)
    {
        $nota = $request->nota;
        $vueltas = 0;

        //consultar a la base si tiene mejor nota, si la posee entonces no guarda
        $lecciones_mayores = DB::table('notas_ejercicios')->where([['user_id', Auth::id()], ['ejercicio', 2], ['unidad_id', 1],['nota', '>', $nota]])->get();

        if(sizeof($lecciones_mayores)==0)
        {
            try
            {
                NotasEjercicios::create([
                    'ejercicio' => 2,
                    'nota' => $nota,
                    'respuesta' => $request->respuesta,
                    'user_id' => Auth::id(),
                    'unidad_id' => 1
                ]);

                return response()->json(['sms' => 'ok', 'nota' => $nota]);
            }
            catch(ErrorException $e)
            {
                return response()->json(['sms' => 'error']);
            }
        }
        else
        {
            $notas_ejercicio = DB::table('notas_ejercicios')->where([ ['user_id',Auth::id()], ['unidad_id',1], ['ejercicio',2] ])->get(); //todos los ejercicios

            if(sizeof($notas_ejercicio)>0)
            {
                if(sizeof($notas_ejercicio)>1)
                {
                    foreach($notas_ejercicio as $ejercicio)
                    {
                        if($vueltas == 0)
                        {
                            $nota_temporal = (float)$ejercicio->nota;
                            $id_nota_mayor = $ejercicio->id;
                        }

                        if((float)$ejercicio->nota > (float)$nota_temporal)
                        {
                            $nota_temporal = (float)$ejercicio->nota;
                            $id_nota_mayor = $ejercicio->id;
                        }
                        $vueltas++;
                    }
                }
                else
                {
                    $nota_temporal = (float)$notas_ejercicio[0]->nota;
                    $id_nota_mayor = $notas_ejercicio[0]->id;
                }
            }
            DB::table('notas_ejercicios')->where('id', $id_nota_mayor)->update([
                'deleted_at' => NULL
            ]);
            return response()->json(['sms' => 'ok', 'nota' => $nota]);
        }

    }

    public function u1ejercicio3()
    {
        return view('student.u1ejercicio3');
    }

    public function u1ejercicio4()
    {
        $nota_mayor = DB::table('notas_ejercicios')->where([ ['user_id',Auth::id()], ['unidad_id',1], ['ejercicio',4] ])->max('nota');
        $palabras_incorrectas = ['odtener', 'medionte', 'entreuista', 'qersonas', 'proqósito', 'entreuistados', 'asqectos', 'oqiniones', 'sodre', 'bifundir'];
        $notas_ejercicio = NotasEjercicios::where([ ['user_id',Auth::id()], ['unidad_id',1], ['ejercicio',4] ])->get(); //todos los ejercicios
        $nota_temporal = 0;
        $respuesta_temporal = '';
        $vueltas = 0;
        $boton_restaurar_nota = false;

        if(sizeof($notas_ejercicio) == 0)
        {
            return view('student.u1ejercicio4');
        }
        else
        {
            $respuesta_temporal = $notas_ejercicio[0]->respuesta;

            $respuesta_temporal = str_replace(']', '', $respuesta_temporal);
            $respuesta_temporal = str_replace('[', '', $respuesta_temporal);
            $respuesta_temporal = str_replace('"', '', $respuesta_temporal);

            $respuesta_temporal = explode(',', $respuesta_temporal);

            $nota_temporal = $notas_ejercicio[0]->nota;

            if($nota_mayor>$nota_temporal) $boton_restaurar_nota = true;

            return view('student.calificados.unidad1.ejercicio4', compact('nota_temporal', 'respuesta_temporal', 'palabras_incorrectas', 'boton_restaurar_nota'));
        }
    }

    public function u1ejercicio4_guardar(Request $request)
    {
        $palabras_incorrectas = ['odtener', 'medionte', 'entreuista', 'qersonas', 'proqósito', 'entreuistados', 'asqectos', 'oqiniones', 'sodre', 'bifundir'];
        $nota = 0;
        $respuesta = ($request->respuesta == NULL) ? '' : $request->respuesta;
        $respuesta_iterable = json_decode($respuesta);

        if($request->respuesta != NULL)
        {
            foreach($respuesta_iterable as $respuestas)
            {
                if(in_array($respuestas, $palabras_incorrectas))
                {
                    $nota++;
                }
            }
        }

        NotasEjercicios::create([
            'ejercicio' => 4,
            'nota' => $nota,
            'respuesta' => $respuesta,
            'user_id' => Auth::id(),
            'unidad_id' => 1
        ]);

        return response()->json(['sms' => 'ok', 'nota' => $nota]);
    }

    public function u1ejercicio5()
    {
        $notas_ejercicio = NotasEjercicios::where([ ['user_id',Auth::id()], ['unidad_id',1], ['ejercicio',5] ])->first();

        if( $notas_ejercicio == NULL )
        {
            return view('student.u1ejercicio5');
        }
        else
        {
            $respuesta = $notas_ejercicio->respuesta;
            return view('student.calificados.unidad1.ejercicio5', compact('respuesta'));
        }
    }

    public function u1ejercicio5_guardar(Request $request)
    {
        $resultado = DB::table('notas_ejercicios')->where([['user_id', Auth::id()], ['ejercicio', 5], ['unidad_id', 1], ['nota', 10]])->first();
        $nota = $request->nota;
        $respuesta = $request->respuesta;
        $id_nota_mayor = 0;

        if($resultado == NULL)
        {
            try
            {
                NotasEjercicios::create([
                    'ejercicio' => 5,
                    'nota' => $nota,
                    'respuesta' => $respuesta,
                    'user_id' => Auth::id(),
                    'unidad_id' => 1
                ]);
            }
            catch(ErrorException $e)
            {
                return response()->json(['sms' => 'error']);
            }
        }
        else
        {
            DB::table('notas_ejercicios')->where([['user_id', Auth::id()], ['ejercicio', 5], ['unidad_id', 1], ['nota', 10]])->update([
                'deleted_at' => NULL
            ]);
        }

        return response()->json(['sms' => 'ok', 'nota' => $nota]);
    }

    public function u1ejercicio6()
    {
        return view('student.u1ejercicio6');
    }

    public function u1ejercicio6_guardar(Request $request)
    {
        $nota = $request->nota;
        $vueltas = 0;

        //consultar a la base si tiene mejor nota, si la posee entonces no guarda
        $lecciones_mayores = DB::table('notas_ejercicios')->where([['user_id', Auth::id()], ['ejercicio', 6], ['unidad_id', 1],['nota', '>', $nota]])->get();

        if(sizeof($lecciones_mayores)==0)
        {
            try
            {
                NotasEjercicios::create([
                    'ejercicio' => 6,
                    'nota' => $nota,
                    'respuesta' => $request->respuesta,
                    'user_id' => Auth::id(),
                    'unidad_id' => 1
                ]);

                return response()->json(['sms' => 'ok', 'nota' => $nota]);
            }
            catch(ErrorException $e)
            {
                return response()->json(['sms' => 'error']);
            }
        }
        else
        {
            $notas_ejercicio = DB::table('notas_ejercicios')->where([ ['user_id',Auth::id()], ['unidad_id',1], ['ejercicio',6] ])->get(); //todos los ejercicios

            if(sizeof($notas_ejercicio)>0)
            {
                if(sizeof($notas_ejercicio)>1)
                {
                    foreach($notas_ejercicio as $ejercicio)
                    {
                        if($vueltas == 0)
                        {
                            $nota_temporal = (float)$ejercicio->nota;
                            $id_nota_mayor = $ejercicio->id;
                        }

                        if((float)$ejercicio->nota > (float)$nota_temporal)
                        {
                            $nota_temporal = (float)$ejercicio->nota;
                            $id_nota_mayor = $ejercicio->id;
                        }
                        $vueltas++;
                    }
                }
                else
                {
                    $nota_temporal = (float)$notas_ejercicio[0]->nota;
                    $id_nota_mayor = $notas_ejercicio[0]->id;
                }
            }
            DB::table('notas_ejercicios')->where('id', $id_nota_mayor)->update([
                'deleted_at' => NULL
            ]);
            return response()->json(['sms' => 'ok', 'nota' => $nota]);
        }

    }

    public function u1ejercicio7()
    {
        return view('student.u1ejercicio7');
    }

    public function u1ejercicio8()
    {
        return view('student.u1ejercicio8');
    }

    public function u1ejercicio9()
    {
        return view('student.u1ejercicio9');
    }

}
