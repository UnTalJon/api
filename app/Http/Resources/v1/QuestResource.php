<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'scheduleId' => $this->schedule_id,
            'collectiveId' => $this->collective_id,
            'createdDate' => $this->fecha_de_creacion,
            'createdLocation' => $this->ubicacion_de_creacion,
            'startDate' => $this->fecha_inicial,
            'endDate' => $this->fecha_final,
            'title' => $this->titulo_plan_de_busqueda,
            'meters' => $this->extension_en_metros,
            'zoneUtm' => $this->zona_utm,
            'bandUtm' => $this->banda_utm,
            'eastUtm' => $this->este_utm,
            'northUtm' => $this->norte_utm,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at
        ];
    }
}
