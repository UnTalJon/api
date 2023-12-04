<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    public function schedules() {
        return $this->belongsTo(Schedule::class);
    }

    public function quests() {
        return $this->belongsTo(Quest::class);
    }
}
