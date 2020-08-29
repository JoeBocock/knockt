<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    public function row()
    {
        return $this->belongsTo(Row::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
