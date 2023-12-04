<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class PersonFilter extends ApiFilter {
    protected $safeParms = [
        'primerNombre' => ['eq', 'ne', 'ctn'],
        'segundoNombre' => ['eq', 'ne', 'ctn'],
        'primerApellido' => ['eq', 'ne', 'ctn'],
        'segundoApellido' => ['eq', 'ne', 'ctn'],
        'curp' => ['eq', 'ne', 'ctn'],
        'telefono' => ['eq', 'ne', 'ctn'],
        'fechaNacimiento' => ['eq', 'ne', 'ctn'],
        'lugarNacimiento' => ['eq', 'ne', 'ctn'],
        'direccion' => ['eq', 'ne', 'ctn'],
        'sexo' => ['eq', 'ne', 'ctn'],
        'genero' => ['eq', 'ne', 'ctn'],
        'nacionalidad' => ['eq', 'ne', 'ctn'],
        'ocupacion' => ['eq', 'ne', 'ctn'],
        'estatusMigratorio' => ['eq', 'ne', 'ctn'],
        'religion' => ['eq', 'ne', 'ctn'],
        'escolaridad' => ['eq', 'ne', 'ctn'],
        'lengua' => ['eq', 'ne', 'ctn'],
        'createdAt' => ['eq', 'ne', 'ctn'],
        'updatedAt' => ['eq', 'ne', 'ctn'],
    ];

    protected $columnMap = [
        'primerNombre' => 'primer_nombre',
        'segundoNombre' => 'segundo_nombre',
        'primerApellido' => 'primer_apellido',
        'segundoApellido' => 'segundo_apellido',
        'curp' => 'curp',
        'telefono' => 'telefono',
        'fechaNacimiento' => 'fecha_de_nacimiento',
        'lugarNacimiento' => 'lugar_de_nacimiento',
        'direccion' => 'direccion',
        'sexo' => 'sexo',
        'genero' => 'genero',
        'nacionalidad' => 'nacionalidad',
        'ocupacion' => 'ocupacion',
        'estatusMigratorio' => 'estatus_migratorio',
        'religion' => 'religion',
        'escolaridad' => 'escolaridad',
        'lengua' => 'lengua',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
    ];
}