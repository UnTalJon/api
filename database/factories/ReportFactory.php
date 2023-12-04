<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use App\Models\Quest;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('es_ES');
        $title = 'Informe de las acciones de búsqueda preliminar realizadas ... ' . $this->faker->sentence . '...';
        $fechaCreacion = $this->faker->dateTime('now');
        return [
            'quest_id' => Quest::factory(),
            'fecha_de_creacion' => $fechaCreacion,
            'ubicacion_de_creacion' => $faker->city,
            'titulo_de_informe' => $title
        ];
    }
}
