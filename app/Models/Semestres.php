<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestres extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];

    public function asignaturas()
    {
        return $this->belongsToMany(Asignaturas::class, 'asignatura_semestre', 'semestre_id', 'asignatura_id');
    }
}
