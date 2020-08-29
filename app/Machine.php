<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    public function rows()
    {
        return $this->hasMany(Row::class);
    }
}
