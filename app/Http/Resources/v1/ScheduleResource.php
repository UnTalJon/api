<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
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
            'location' => $this->localidad,
            'folio' => $this->folio_unico,
            'folder' => $this->carpeta_investigacion,
            'createdDate' => $this->fecha_de_creacion,
            'createdLocation' => $this->ubicacion_de_creacion,
            'title' => $this->titulo,
            'content' => $this->contenido,
            'problem' => $this->plantamiento_del_problema,
            'peculiarities' => $this->particularidades_del_lugar,
            'methodology' => $this->metodologia,
            'interventionStrategy' => $this->estrategia_de_intervencion,
            'finalThoughts' => $this->consideraciones_finales,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'persons' => PersonResource::collection($this->whenLoaded('persons')),
            'municipios' => MunicipioResource::collection($this->whenLoaded('municipios')),
        ];
    }
}
