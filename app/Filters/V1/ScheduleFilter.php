<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ScheduleFilter extends ApiFilter {
    protected $safeParms = [
        'personId' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne', 'ctn'],
        'municipioId' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne', 'ctn'],
        'location' => ['eq', 'ne', 'ctn'],
        'folio' => ['eq', 'ne', 'ctn'],
        'folder' => ['eq', 'ne', 'ctn'],
        'createdDate' => ['eq', 'ne', 'ctn'],
        'createdLocation' => ['eq', 'ne', 'ctn'],
        'title' => ['eq', 'ne', 'ctn'],
        'content' => ['eq', 'ne', 'ctn'],
        'problem' => ['eq', 'ne', 'ctn'],
        'peculiarities' => ['eq', 'ne', 'ctn'],
        'methodology' => ['eq', 'ne', 'ctn'],
        'interventionStrategy' => ['eq', 'ne', 'ctn'],
        'finalThoughts' => ['eq', 'ne', 'ctn'],
        'createdAt' => ['eq', 'ne', 'ctn'],
        'updatedAt' => ['eq', 'ne', 'ctn'],
    ];

    protected $columnMap = [
        'personId' => 'person_id',
        'municipioId' => 'municipio_id',
        'location' => 'localidad',
        'folio' => 'folio_unico',
        'folder' => 'carpeta_investigacion',
        'createdDate' => 'fecha_de_creacion',
        'createdLocation' => 'ubicacion_de_creacion',
        'title' => 'titulo',
        'content' => 'contenido',
        'problem' => 'plantamiento_del_problema',
        'peculiarities' => 'particularidades_del_lugar',
        'methodology' => 'metodologia',
        'interventionStrategy' => 'estrategia_de_intervencion',
        'finalThoughts' => 'consideraciones_finales',
        'createdAt' => 'created_at',
        'updateAt' => 'updated_at',
    ];
}