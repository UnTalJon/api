<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class LogFilter extends ApiFilter {
    protected $safeParms = [
        'questId' => ['eq', 'lt', 'lte', 'gt', 'gte', 'ne', 'ctn'],
        'time' => ['eq', 'ne', 'ctn'],
        'title' => ['eq', 'ne', 'ctn'],
        'content' => ['eq', 'ne', 'ctn'],
        'createdAt' => ['eq', 'ne', 'ctn'],
        'updateAt' => ['eq', 'ne', 'ctn']
    ];

    protected $columnMap = [
        'questId' => 'quest_id',
        'time' => 'hora',
        'title' => 'titulo',
        'content' => 'contenido',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
    ];
}