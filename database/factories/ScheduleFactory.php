<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;
use App\Models\Municipio;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('es_ES');
        $fechaCreacion = $this->faker->dateTimeBetween('-3 years', 'now');
        $ubicacionCreacion = 'Xalapa, Veracruz.';
        $localidad = $faker->city;
        $title = 'Plan de trabajo para realizar acciones de búsqueda en la localidad de ' . $localidad;

        return [
            'localidad' => $localidad,
            'folio_unico' => $faker->unique()->bothify('??#########'), // Genera un código único de 12 caracteres
            'carpeta_investigacion' => $faker->bothify('CPI-####'), // Genera un código al estilo "CPI-1234"
            'ubicacion_de_creacion' => $ubicacionCreacion,
            'fecha_de_creacion' => $fechaCreacion,
            'titulo' => $title,
            'contenido' => $faker->text,
            'plantamiento_del_problema' => $faker->paragraph,
            'particularidades_del_lugar' => $faker->paragraph,
            'metodologia' => $faker->paragraph,
            'estrategia_de_intervencion' => $faker->paragraph,
            'consideraciones_finales' => $faker->paragraph,
        ];
    }
}
