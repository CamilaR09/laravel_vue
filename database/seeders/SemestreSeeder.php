<?php

namespace Database\Seeders;

use App\Models\Semestres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $semestres = [
            ['nombre' => 'Primer Semestre'],
            ['nombre' => 'Segundo Semestre'],
            ['nombre' => 'Tercer Semestre'],
            ['nombre' => 'Cuarto Semestre'],
            ['nombre' => 'Quinto Semestre'],
            ['nombre' => 'Sexto Semestre'],
            ['nombre' => 'Séptimo Semestre'],

        ];
        

        foreach ($semestres as $semestre) {
            Semestres::create($semestre);
        }
    }
}
