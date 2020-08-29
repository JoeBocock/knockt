<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Row extends Model
{
    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }

    public function slots()
    {
        return $this->hasMany(Slot::class);
    }
}
