<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function slots()
    {
        return $this->hasMany(Slot::class);
    }
}
