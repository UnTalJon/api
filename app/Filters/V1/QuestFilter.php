<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class QuestFilter extends ApiFilter {
    protected $safeParms = [
        'scheduleId' => ['eq', 'ne'],
        'collectiveId' => ['eq', 'ne'],
        'createdDate' => ['eq', 'ctn'],
        'createdLocation' => ['eq', 'ctn'],
        'startDate' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne'],
        'endDate' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne'],
        'title' => ['eq', 'ctn'],
        'meters' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne'],
        'zoneUtm' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne'],
        'bandUtm' => ['eq', 'ne'],
        'eastUtm' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne'],
        'northUtm' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne'],
        'createdAt' => ['eq'],
        'updatedAt' => ['eq']
    ];

    protected $columnMap = [
        'scheduleId' => 'schedule_id',
        'collectiveId' => 'collective_id',
        'createdDate' => 'fecha_de_creacion',
        'createdLocation' => 'ubicacion_de_creacion',
        'startDate' => 'fecha_inicial',
        'endDate' => 'fecha_final',
        'title' => 'titulo_plan_de_busqueda',
        'meters' => 'extension_en_metros',
        'zoneUtm' => 'zona_utm',
        'bandUtm' => 'banda_utm',
        'eastUtm' => 'este_utm',
        'northUtm' => 'norte_utm',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
    ];
}