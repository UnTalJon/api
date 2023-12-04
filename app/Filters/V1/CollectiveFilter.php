<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CollectiveFilter extends ApiFilter {
    protected $safeParms = [
        'coordinatorName' => ['eq', 'ne', 'ctn'],
        'collectiveName' => ['eq', 'ne', 'ctn']
    ];

    protected $columnMap = [
        'coordinatorName' => 'nombre_coordinador',
        'collectiveName' => 'nombre_colectivo',
    ];
}