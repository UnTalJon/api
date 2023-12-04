<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
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
            'primerNombre' => $this->primer_nombre,
            'segundoNombre' => $this->segundo_nombre,
            'primerApellido' => $this->primer_apellido,
            'segundoApellido' => $this->segundo_apellido,
            'curp' => $this->curp,
            'telefono' => $this->telefono,
            'fechaNacimiento' => $this->fecha_de_nacimiento,
            'lugarNacimiento' => $this->lugar_de_nacimiento,
            'direccion' => $this->direccion,
            'sexo' => $this->sexo,
            'genero' => $this->genero,
            'nacionalidad' => $this->nacionalidad,
            'ocupacion' => $this->ocupacion,
            'estatusMigratorio' => $this->estatus_migratorio,
            'religion' => $this->religion,
            'escolaridad' => $this->escolaridad,
            'lengua' => $this->lengua,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'schedules' => ScheduleResource::collection($this->whenLoaded('schedules'))
        ];
    }
}
