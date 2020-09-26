<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

class Row extends Model
{
    use HasTimestamps;

    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }

    public function slots()
    {
        return $this->hasMany(Slot::class);
    }
}
