<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FindResource extends JsonResource
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
            'indicative' => $this->indicio,
            'type' => $this->tipo,
            'description' => $this->descripcion,
            'file' => $this->foto,
            'fileCaption' => $this->pie_de_foto,
            'createdAt' => $this->created_at,
        ];
    }
}
