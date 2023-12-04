<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class FindFilter extends ApiFilter {
    protected $safeParms = [
        'questId' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne', 'ctn'],
        'indicative' => ['eq', 'ne', 'ctn'],
        'type' => ['eq', 'ne', 'ctn'],
        'description' => ['eq', 'ne', 'ctn'],
        'file' => ['eq', 'ne', 'ctn'],
        'fileCaption' => ['eq', 'ne', 'ctn'],
        'createdAt' => ['eq', 'ne', 'ctn'],
    ];

    protected $columnMap = [
        'questId' => 'quest_id',
        'indicative' => 'indicio',
        'type' => 'tipo',
        'description' => 'descripcion',
        'file' => 'foto',
        'fileCaption' => 'pie_de_foto',
        'createdAt' => 'created_at',
    ];
}