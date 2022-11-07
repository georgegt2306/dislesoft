<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Parameter;
use App\Models\NotasEjercicios;
use ErrorException;

class ParametersController extends Controller
{
    public function nota(Request $request)
    {
        $leccion_hecha = DB::table('notas_ejercicios')->where([['unidad_id', $request->unidad],['ejercicio', $request->ejercicio], ['user_id', Auth::id()]])->whereNull('deleted_at')->first(['nota']);
        $nota = $leccion_hecha->nota;
        $nota_redondeada = round($nota);
        $frase = '';
        $estrellas = 0;

        //frase a mostrar en modal dependiendo de la nota
        $clave = "texto_calificacion_" .$nota_redondeada;
        $frase = Parameter::where('clave',$clave)->first();

        //imagen a mostrar en modal dependiendo de la nota
        $clave = "imagen_calificacion_" .$nota_redondeada;
        $imagen = Parameter::where('clave',$clave)->first();

        if($nota>=0 && $nota<=2) $estrellas = 1;
        else if($nota>2 && $nota<=4) $estrellas = 2;
        else if($nota>4 && $nota<=6) $estrellas = 3;
        else if($nota>6 && $nota<=8) $estrellas = 4;
        else if($nota>8 && $nota<=10) $estrellas = 5;
        
        return response()->json(['nota' => $nota, 'cantidad_estrellas' => $estrellas, 'frase' => $frase->valor, 'imagen' => $imagen->valor]);
    }

    public function destroy(Request $request)
    {
        try
        {
            NotasEjercicios::where([['user_id', Auth::id()], ['ejercicio', $request->ejercicio], ['unidad_id', $request->unidad]])->delete();
            return response()->json(['sms' => 'ok']);
        }
        catch(ErrorException $e)
        {
            return response()->json(['sms' => $e]);
        }
    }

    public function restaurar_nota(Request $request)
    {
        try
        {
            DB::beginTransaction();

            DB::table('notas_ejercicios')->where([['user_id', Auth::id()], ['ejercicio', $request->ejercicio], ['unidad_id', $request->unidad]])->update([
                'deleted_at' => date('Ymd')
            ]);

            $nota_mayor = DB::table('notas_ejercicios')->where([['user_id', Auth::id()], ['ejercicio', $request->ejercicio], ['unidad_id', $request->unidad]])->orderBy('nota', 'desc')->first();


            DB::table('notas_ejercicios')->where('id', $nota_mayor->id)->update([
                'deleted_at' => NULL
            ]);

            DB::commit();

            return response()->json(['sms' => 'ok']);
        }
        catch(ErrorException $e)
        {
            return response()->json(['sms' => $e]);
        }
    }
}
