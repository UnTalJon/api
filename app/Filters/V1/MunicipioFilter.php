<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class MunicipioFilter extends ApiFilter {
    protected $safeParms = [
        'name' => ['eq', 'ne', 'ctn'],
        'vegetation' => ['eq', 'ne', 'ctn'],
        'fauna' => ['eq', 'ne', 'ctn'],
        'climate' => ['eq', 'ne', 'ctn'],
        'soil' => ['eq', 'ne', 'ctn'],
        'peculiarities' => ['eq', 'ne', 'ctn']
    ];

    protected $columnMap = [
        'name' => 'nombre',
        'vegetation' => 'vegetacion',
        'fauna' => 'fauna',
        'climate' => 'clima',
        'soil' => 'tipo_de_suelo',
        'peculiarities' => 'particularidades',
    ];
}