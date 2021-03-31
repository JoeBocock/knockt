<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
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
