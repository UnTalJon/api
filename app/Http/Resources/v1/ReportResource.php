<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
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
            'questId' => $this->quest_id,
            'createdDate' => $this->fecha_de_creacion,
            'createdLocation' => $this->ubicacion_de_creacion,
            'title' => $this->titulo_de_informe,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at
        ];
    }
}
