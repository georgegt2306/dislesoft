<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parameter;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parametro = New Parameter;
        $parametro->clave = 'texto_calificacion_0';
        $parametro->valor = '¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR';
        $parametro->descripcion = 'texto cuando saca 0';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'texto_calificacion_1';
        $parametro->valor = '¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR';
        $parametro->descripcion = 'texto cuando saca 1';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'texto_calificacion_2';
        $parametro->valor = '¡TU PUEDES! NECESITAS PRACTICAR Y ESFORZARTE MÁS PARA MEJORAR';
        $parametro->descripcion = 'texto cuando saca 2';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'texto_calificacion_3';
        $parametro->valor = '¡NO TE RINDAS! SI SIGUES PRACTICANDO, LO CONSEGUIRÁS';
        $parametro->descripcion = 'texto cuando saca 3';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'texto_calificacion_4';
        $parametro->valor = '¡NO TE RINDAS! SI SIGUES PRACTICANDO, LO CONSEGUIRÁS';
        $parametro->descripcion = 'texto cuando saca 4';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'texto_calificacion_5';
        $parametro->valor = '¡SIGUE PRACTICANDO! PODRÁS LOGRARLO SI LO INTENTAS Y TE ESFUERZAS MAS.';
        $parametro->descripcion = 'texto cuando saca 5';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'texto_calificacion_6';
        $parametro->valor = '¡SIGUE PRACTICANDO! PODRÁS LOGRARLO SI LO INTENTAS Y TE ESFUERZAS MAS.';
        $parametro->descripcion = 'texto cuando saca 6';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'texto_calificacion_7';
        $parametro->valor = '¡BUEN TRABAJO! AÚN PUEDES DAR LO MEJOR DE TI SI SIGUES PRACTICANDO.';
        $parametro->descripcion = 'texto cuando saca 7';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'texto_calificacion_8';
        $parametro->valor = '¡MUY BUEN TRABAJO! SIGUE ASÍ, ESTÁS CERCA DE SER EL MEJOR EN ESTO.';
        $parametro->descripcion = 'texto cuando saca 8';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'texto_calificacion_9';
        $parametro->valor = '¡EXCELENTE TRABAJO! ESTÁS A UN PASO  DE LLEGAR A LO MAS ALTO, SIGUE ASÍ.';
        $parametro->descripcion = 'texto cuando saca 9';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'texto_calificacion_10';
        $parametro->valor = '¡FELICITACIONES, ERES EL MEJOR! CONSEGUISTE LA MAS ALTA CALIFICACIÓN, NO DEJES DE SEGUIR ESFORZÁNDOTE. &#128512;';
        $parametro->descripcion = 'texto cuando saca 10';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'imagen_calificacion_0';
        $parametro->valor = 'felicidades.gif';
        $parametro->descripcion = 'imagen cuando saca 0';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'imagen_calificacion_1';
        $parametro->valor = 'felicidades.gif';
        $parametro->descripcion = 'imagen cuando saca 1';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'imagen_calificacion_2';
        $parametro->valor = 'felicidades.gif';
        $parametro->descripcion = 'imagen cuando saca 2';
        $parametro->save();
        
        $parametro = New Parameter;
        $parametro->clave = 'imagen_calificacion_3';
        $parametro->valor = 'felicidades.gif';
        $parametro->descripcion = 'imagen cuando saca 3';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'imagen_calificacion_4';
        $parametro->valor = 'felicidades.gif';
        $parametro->descripcion = 'imagen cuando saca 4';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'imagen_calificacion_5';
        $parametro->valor = 'felicidades.gif';
        $parametro->descripcion = 'imagen cuando saca 5';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'imagen_calificacion_6';
        $parametro->valor = 'felicidades.gif';
        $parametro->descripcion = 'imagen cuando saca 6';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'imagen_calificacion_7';
        $parametro->valor = 'felicidades.gif';
        $parametro->descripcion = 'imagen cuando saca 7';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'imagen_calificacion_8';
        $parametro->valor = 'felicidades.gif';
        $parametro->descripcion = 'imagen cuando saca 8';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'imagen_calificacion_9';
        $parametro->valor = 'felicidades.gif';
        $parametro->descripcion = 'imagen cuando saca 9';
        $parametro->save();

        $parametro = New Parameter;
        $parametro->clave = 'imagen_calificacion_10';
        $parametro->valor = 'felicidades.gif';
        $parametro->descripcion = 'imagen cuando saca 10';
        $parametro->save();
    }
}
