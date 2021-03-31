<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
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
