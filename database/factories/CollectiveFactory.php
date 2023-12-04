<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collective>
 */
class CollectiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $coordinadores = $this->faker->randomElement([
            'Fabiola Pensado Barrera', 'María Elena Gutierrez Dominguez', 'Victoria Delgadillo Romero','Milagros Montiel Cruz',
            'Sara Gonzáles Rodríguez', 'Nancy Edith Bolaños Rodríguez', 'Lidia Sagnitet Lata Tobón', 'Almerely Malpica Landa',
            'Mario Roiz Pinzón', 'Lenit Enriquez Orozco', 'Rosa de Belén González Medrano', 'Oscar Ramírez Trejo'
        ]);

        $colectivo = null;

        switch ($coordinadores) {
            case 'Fabiola Pensado Barrera':
                $colectivo = 'Familiares en Búsqueda María Herrera Xalapa';
                break;
            
            case 'María Elena Gutierrez Dominguez':
                $colectivo = 'Buscando a Nuestros Desaparecidos y Desaparecidas Veracruz';
                break;
            
            case 'Victoria Delgadillo Romero':
                $colectivo = 'Familiares Enlace Xalapa';
                break;
            
            case 'Milagros Montiel Cruz':
                $colectivo = 'Colectivo Luz, Fuerza y Lucha por Nuestros Desaparecidos';
                break;

            case 'Sara Gonzáles Rodríguez':
                $colectivo = 'Colectivo por la Paz Xalapa';
                break;
            
            case 'Nancy Edith Bolaños Rodríguez':
                $colectivo = 'Buscando Corazones Perdidos';
                break;
            
            case 'Lidia Sagnitet Lata Tobón':
                $colectivo = 'Justicia y Dignidad Veracruz';
                break;
            
            case 'Almerely Malpica Landa':
                $colectivo = 'Colectivo Fe y Esperanza "Por un Milagro de Dios"';
                break;

            case 'Mario Roiz Pinzón':
                $colectivo = 'Red de Madres Buscando a sus Hijos Veracruz';
                break;
            
            case 'Lenit Enriquez Orozco':
                $colectivo = 'Madres en Búsqueda Coatzacoalcos';
                break;
            
            case 'Rosa de Belén González Medrano':
                $colectivo = 'Madres en Búsqueda Belen González';
                break;
            
            case 'Oscar Ramírez Trejo':
                $colectivo = 'Unidos por Amor a Ti';
                break;
            
            default:
            $colectivo = 'Indefinido';
                break;
        }

        return [
            'nombre_coordinador' => $coordinadores,
            'nombre_colectivo' => $colectivo 
        ];
    }
}
