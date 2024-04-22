<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignaturas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'creditos', 'nombre_docente', 'asignatura_prerrequisito', 'horas_trabajo_autonomo', 'horas_trabajo_dirigido',
    ];

    public function semestres()
    {
        return $this->belongsToMany(Semestres::class, 'asignatura_semestre', 'asignatura_id', 'semestre_id');
    }
}
