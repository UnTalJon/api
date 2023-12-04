<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Schedule;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('es_ES');

        $ocupacion = $this->faker->randomElement([
            'Ingeniero', 'Médico', 'Abogado', 'Profesor', 'Arquitecto','Contador', 'Diseñador', 'Programador',
            'Cocinero', 'Periodista','Electricista', 'Plomero', 'Carpintero', 'Pintor', 'Albañil', 'Enfermero',
            'Policía', 'Bombero', 'Actor', 'Músico','Agricultor', 'Empresario', 'Economista', 'Psicólogo', 'Científico',
            'Fotógrafo', 'Chef', 'Taxista', 'Camionero', 'Astrónomo','Ingeniero de Software', 'Enfermera', 'Dentista',
            'Psicoterapeuta', 'Especialista en Marketing Digital','Chef Ejecutivo', 'Agente de Viajes', 'Consultor Financiero',
            'Diseñador de Moda', 'Investigador Científico', 'Analista de Datos', 'Piloto de Avión', 'Entrenador Personal',
            'Veterinario', 'Asistente Social','Instructor de Yoga', 'Diseñador Gráfico', 'Terapeuta Ocupacional',
            'Gerente de Recursos Humanos', 'Entrenador de eSports','Especialista en Energías Renovables', 'Arqueólogo',
            'Escritor Freelance', 'Compositor Musical', 'Instructor de Baile','Coach de Vida', 'Geólogo',
            'Inspector de Calidad', 'Diseñador de Juegos', 'Fotógrafo de Naturaleza'
        ]);

        $sexo = $faker->randomElement(['Masculino', 'Femenino']);

        $genero = null;
        if($sexo == 'Masculino') {
            $genero = 'Hombre';
        } else {
            $genero = 'Mujer';
        }

        return [
            'schedule_id' => Schedule::factory(),
            'primer_nombre' => $faker->firstName,
            'segundo_nombre' => $faker->optional()->firstName,
            'primer_apellido' => $faker->lastName,
            'segundo_apellido' => $faker->lastName,
            'telefono' => $faker->regexify('[0-9]{10}'),
            'curp' => $faker->regexify('[A-Z]{4}[0-9]{6}[HM][A-Z]{5}[0-9]{2}'),
            'fecha_de_nacimiento' => $faker->date,
            'lugar_de_nacimiento' => $faker->city,
            'direccion' => $faker->address,
            'sexo' => $sexo,
            'genero' => $faker->randomElement([$genero, 'No Binario', $genero, $genero]),
            'nacionalidad' => $faker->randomElement(['Mexicana', 'Extranjera']),
            'ocupacion' => $ocupacion,
            'estatus_migratorio' => $faker->randomElement(['Residente', 'Turista']),
            'religion' => $faker->randomElement(['Católica', 'Protestante', 'Ateo']),
            'escolaridad' => $faker->randomElement(['Primaria', 'Secundaria', 'Preparatoria', 'Licenciatura']),
            'lengua' => $faker->randomElement(['Español', 'Inglés', 'Francés'])
        ];
    }
}
