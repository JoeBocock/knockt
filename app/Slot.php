<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

class Slot extends Model
{
    use HasTimestamps;

    public function row()
    {
        return $this->belongsTo(Row::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
