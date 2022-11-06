<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NotasEjercicios extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'notas_ejercicios';
    protected $fillable = ['ejercicio', 'nota', 'respuesta', 'user_id', 'unidad_id'];

}
