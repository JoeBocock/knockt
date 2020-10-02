<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

class Product extends Model
{
    use HasTimestamps;

    public function slots()
    {
        return $this->hasMany(Slot::class);
    }

    public function inStock(): bool
    {
        return $this->stock > 0;
    }
}
