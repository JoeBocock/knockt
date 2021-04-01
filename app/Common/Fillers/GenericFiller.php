<?php

namespace App\Common\Fillers;

use App\Common\Contracts\FillerInterface;
use Illuminate\Database\Eloquent\Model;

class GenericFiller implements FillerInterface
{
    public static function fill(Model $model, array $data): Model
    {
        $model->fill($data);
        $model->save();

        return $model;
    }
}
