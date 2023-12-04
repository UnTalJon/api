<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use App\Models\Schedule;
use App\Models\Collective;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quest>
 */
class QuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //Generar fecha de Creacion
        $fechaCreacion = $this->faker->dateTimeBetween('-3 years', 'now');

        //Lugar de Creación
        $ubicacionCreacion = 'Xalapa, Veracruz.';

        //Generar fechas iniciales y finales
        $semanas = $this->faker->numberBetween(1, 24);
        $dias = $this->faker->numberBetween(1, 10);
        $fechaInicial = (new Carbon($fechaCreacion))->addWeeks($semanas);
        $fechaFinal = (new Carbon($fechaInicial))->addDays($dias);

        // Generar coordenadas UTM falsas como cadenas
        $zona = $this->faker->numberBetween(1, 60);
        $banda = $this->faker->randomElement([
            'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X'
        ]);
        $utmEast = $this->faker->randomFloat(2, 2000, 900000); // Este
        $utmNorth = $this->faker->randomFloat(2, 2000, 9000000); // Norte
        $utmEastString = number_format($utmEast, 2);
        $utmNorthString = number_format($utmNorth, 2);

        //Extension en metros
        $extension = $this->faker->numberBetween(10, 5000);

        //Título
        $prefix = 'Informe de Plan de Búsqueda realizadas del ';

        $month1 = $fechaInicial->month;
        switch ($month1) {
            case 1:
                $nombreMes = 'Enero';
                break;
            case 2:
                $nombreMes = 'Febrero';
                break;
            case 3:
                $nombreMes = 'Marzo';
                break;
            case 4:
                $nombreMes = 'Abril';
                break;
            case 5:
                $nombreMes = 'Mayo';
                break;
            case 6:
                $nombreMes = 'Junio';
                break;
            case 7:
                $nombreMes = 'Julio';
                break;
            case 8:
                $nombreMes = 'Agosto';
                break;
            case 9:
                $nombreMes = 'Septiembre';
                break;
            case 10:
                $nombreMes = 'Octubre';
                break;
            case 11:
                $nombreMes = 'Noviembre';
                break;
            case 12:
                $nombreMes = 'Diciembre';
                break;
            default:
                $nombreMes = 'Mes no válido';
        }
        $month2 = $fechaFinal->month;
        switch ($month2) {
            case 1:
                $nombreMes2 = 'Enero';
                break;
            case 2:
                $nombreMes2 = 'Febrero';
                break;
            case 3:
                $nombreMes2 = 'Marzo';
                break;
            case 4:
                $nombreMes2 = 'Abril';
                break;
            case 5:
                $nombreMes2 = 'Mayo';
                break;
            case 6:
                $nombreMes2 = 'Junio';
                break;
            case 7:
                $nombreMes2 = 'Julio';
                break;
            case 8:
                $nombreMes2 = 'Agosto';
                break;
            case 9:
                $nombreMes2 = 'Septiembre';
                break;
            case 10:
                $nombreMes2 = 'Octubre';
                break;
            case 11:
                $nombreMes2 = 'Noviembre';
                break;
            case 12:
                $nombreMes2 = 'Diciembre';
                break;
            default:
                $nombreMes2 = 'Mes no válido';
        }

        $date = $fechaInicial->day.' de '.$nombreMes.' de '.$fechaInicial->year.' al '.$fechaFinal->day .' de '.$nombreMes2.' de '.$fechaFinal->year ;

        $sentence = $this->faker->sentence;

        $title = $prefix . $date . ' ' . $sentence;

        return [
            'schedule_id' => Schedule::factory(),
            'collective_id' => Collective::factory(),

            'fecha_de_creacion' => $fechaCreacion,
            'ubicacion_de_creacion' => $ubicacionCreacion,
            'fecha_inicial' => $fechaInicial,
            'fecha_final' => $fechaFinal,

            'titulo_plan_de_busqueda' => $title,
            'extension_en_metros' => $extension,
            'zona_utm' => $zona,
            'banda_utm' => $banda,
            'este_utm' => $utmEastString,
            'norte_utm' => $utmNorthString

        ];
    }
}
