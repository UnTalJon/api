<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Quest;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Find>
 */
class FindFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $indicio = $this->faker->randomElement(['Indicio Físico', 'Indicio Biologico']);

        $indicioFisico = $this->faker->randomElement([
            'Reloj', 'Anillo', 'Cartera', 'Collar', 'Mochila', 'Gorra', 'Libro', 'Lentes', 'Llaves de casa', 'Agenda',
            'Llaves de auto', 'Audifonos', 'Camara', 'Boleto de transporte', 'Celular', 'Computadora', 'Libreta personal',
            'Licencia de conducir', 'Pasaporte', 'Identificación INE', 'Maleta', 'Tarjeta Bancaria', 'Aretes', 'Portafolio',
            'Fibra de Ropa', 'Fibra de automovil', 'Arma de Fuego', 'Arma blanca', 'Huella de Calzado'
        ]);
        $indicioBiologico = $this->faker->randomElement([
            'Hueso Largo - Fémur', 'Hueso Largo - Húmero', 'Huesos Cortos - Carpo', 'Huesos Cortos - Tarso',
            'Hueso Plano- Escápula', 'Hueso Plano - Cráneo', 'Hueso Irregular - Vértebra', 'Hueso Sesamoideo - Rotula',
            'Diente Incisivo', 'Diente Canino', 'Diente Premolare', 'Diente Molare', 'Cabello Liso', 'Cabello Rizado',
            'Cabello Ondulado', 'Cabello Grueso', 'Cabello Fino', 'Tejido Muscular', 'Tejido Nervioso', 'Tejido Epitelial'
        ]);
        
        $tipo = $indicio == 'Indicio Físico' ? $indicioFisico : $indicioBiologico;

        $domain = 'http://cebv.com/nfs/fotos/hallazgos/';

        $path = $this->faker->optional()->randomNumber(5);

        $url = null;

        if($path != null) {
            $url = $domain . $path;
        }

        return [
            'quest_id' => Quest::factory(),
            'indicio' => $indicio,
            'tipo' => $tipo,
            'descripcion' => $this->faker->paragraph(1),
            'foto' => $url,
            'pie_de_foto' => $url != null ? $this->faker->paragraph(1) : null
        ];
    }
}
