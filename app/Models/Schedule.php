<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function persons() {
        return $this->hasMany(Person::class);
    }

    public function municipios() {
        return $this->hasMany(Municipio::class);
    }

    public function quests() {
        return $this->hasOne(Quest::class);
    }

    public function reports() {
        return $this->hasOne(Report::class);
    }
}
