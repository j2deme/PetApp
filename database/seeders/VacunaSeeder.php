<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vacuna;

class VacunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vacunas = [
            ['nombre' => 'Rabia', 'fabricante' => 'Pfizer', 'tipo' => 'Inyectable'],
            ['nombre' => 'Moquillo', 'fabricante' => 'Pfizer', 'tipo' => 'Inyectable'],
            ['nombre' => 'Parvovirus', 'fabricante' => 'Pfizer', 'tipo' => 'Inyectable'],
            ['nombre' => 'Parainfluenza', 'fabricante' => 'Pfizer', 'tipo' => 'Inyectable'],
            ['nombre' => 'Hepatitis', 'fabricante' => 'Pfizer', 'tipo' => 'Inyectable'],
            ['nombre' => 'Leptospirosis', 'fabricante' => 'Pfizer', 'tipo' => 'Inyectable'],
            ['nombre' => 'Bordetella', 'fabricante' => 'Pfizer', 'tipo' => 'Inyectable'],
            ['nombre' => 'Giardia', 'fabricante' => 'Pfizer', 'tipo' => 'Inyectable'],
            ['nombre' => 'Lyme', 'fabricante' => 'Pfizer', 'tipo' => 'Inyectable']
        ];
        foreach ($vacunas as $vacuna) {
            Vacuna::create($vacuna);
        }
        $this->command->info('Vacunas creadas');
    }
}
