<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

class Machine extends Model
{
    use HasTimestamps;

    public function rows()
    {
        return $this->hasMany(Row::class);
    }
}
