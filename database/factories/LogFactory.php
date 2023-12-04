<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Quest;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Log>
 */
class LogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hora = $this->faker->time($format = 'H:i:s', $max = 'now');
        
        $evento = $this->faker->randomElement([
            'Recopilación de datos adicionales sobre el incidente.',
            'Entrevistas con personas clave para obtener información relevante.',
            'Análisis de grabaciones de cámaras de seguridad en áreas cercanas.',
            'Coordinación estratégica con equipos de búsqueda y rescate.',
            'Colaboración con el personal de seguridad para obtener información cruciales.',
            'Entrevistas exhaustivas con familiares y allegados.',
            'Identificación y evaluación de posibles indicios o pistas adicionales.',
            'Revisión de registros y documentos pertinentes al caso.',
            'Análisis de patrones y tendencias relacionadas con eventos similares.',
            'Coordinación con autoridades locales para optimizar recursos y esfuerzos.',
            'Evaluación de la información recabada para formular nuevas estrategias.',
            'Entrevistas adicionales con testigos potenciales.',
            'Análisis de la geografía y topografía del área circundante.',
            'Revisión de transacciones financieras y comunicaciones electrónicas relevantes.',
            'Coordinación con expertos forenses para análisis detallado de pruebas.',
            'Entrevistas con expertos en perfiles psicológicos para obtener perspectivas adicionales.',
            'Reevaluación constante de la información disponible para ajustar enfoques.',
            'Desarrollo de estrategias de difusión de información para obtener colaboración ciudadana.',
            'Coordinación con organismos estatales en caso de que se desplace el área de búsqueda.',
            'Investigación de conexiones y relaciones que puedan arrojar luz sobre el incidente.',
            'Adaptación del área de búsqueda debido a condiciones climáticas adversas, como lluvia intensa.',
            'Implementación de equipos especializados, incluyendo perros de búsqueda y rescate.',
            'Coordinación de operativos con unidades caninas para rastreo y detección de posibles rastros.',
            'Exploración de nuevos sectores basada en alertas de los perros de búsqueda.',
            'Descubrimiento de indicios adicionales gracias al olfato canino altamente entrenado.',
            'Ajuste de estrategias de búsqueda en función de la retroalimentación de los equipos caninos.',
            'Utilización de tecnología de radar terrestre para explorar áreas de difícil acceso.',
            'Identificación de anomalías en el terreno mediante el radar terrestre.',
            'Hallazgo de objetos o estructuras ocultas a simple vista con el uso del radar terrestre.',
            'Revisión y análisis de datos generados por el radar terrestre para orientar la búsqueda.',
            'Cambio en la dirección de búsqueda basado en resultados obtenidos con el radar terrestre.',
            'Coordinación con expertos en meteorología para anticipar cambios climáticos y ajustar estrategias.',
            'Evaluación constante de la efectividad de las herramientas tecnológicas utilizadas en la investigación.',
            'Entrevistas adicionales con residentes locales para obtener información específica sobre la zona.',
            'Implementación de drones para explorar áreas extensas de manera más eficiente.',
            'Colaboración con unidades de buceo en casos relacionados con cuerpos de agua.',
            'Revisión de registros de comunicaciones móviles para trazar posibles movimientos.',
            'Análisis de imágenes satelitales para identificar cambios en la topografía o estructuras relevantes.'
        ]);

        $contenido = $this->faker->paragraph(4);

        return [
            'quest_id' => Quest::factory(),
            'hora' => $hora,
            'titulo' => $evento,
            'contenido' => $contenido
        ];
    }
}
