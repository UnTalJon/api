<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ReportFilter extends ApiFilter {
    protected $safeParms = [
        'questId' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne', 'ctn'],
        'createdDate' => ['eq', 'ne', 'ctn'],
        'createdLocation' => ['eq', 'ne', 'ctn'],
        'title' => ['eq', 'ne', 'ctn'],
        'createdAt' => ['eq', 'ne', 'ctn'],
        'updateAt' => ['eq', 'ne', 'ctn']
    ];

    protected $columnMap = [
        'questId' => 'quest_id',
        'createdDate' => 'fecha_de_creacion',
        'createdLocation' => 'ubicacion_de_creacion',
        'title' => 'titulo_de_informe',
        'createdAt' => 'created_at',
        'updateAt' => 'updated_at'
    ];
}