<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignaturaSemestres extends Model
{
    use HasFactory;
    protected $fillable = [
        'asignatura_id', 'semestre_id',
    ];

    public function asignatura()
    {
        return $this->belongsTo(Asignaturas::class);
    }

    public function semestre()
    {
        return $this->belongsTo(Semestres::class);
    }
}
