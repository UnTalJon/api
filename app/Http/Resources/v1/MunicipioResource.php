<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MunicipioResource extends JsonResource
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
            'name' => $this->nombre,
            'vegetation' => $this->vegetacion,
            'fauna' => $this->fauna,
            'climate' => $this->clima,
            'soil' => $this->tipo_de_suelo,
            'peculiarities' => $this->particularidades,
        ];
    }
}
