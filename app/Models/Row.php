<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Row extends Model
{
    use HasFactory;
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
