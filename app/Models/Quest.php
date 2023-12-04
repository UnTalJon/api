<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;

    public function colectivos() {
        return $this->hasMany(Collective::class);
    }

    public function finds() {
        return $this->hasMany(Find::class);
    }

    public function logs() {
        return $this->hasMany(Log::class);
    }

    public function schedules() {
        return $this->belongsTo(Schedule::class);
    }

    public function reports() {
        return $this->hasOne(Report::class);
    }
}
