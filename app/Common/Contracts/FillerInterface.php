<?php

namespace App\Common\Contracts;

use Illuminate\Database\Eloquent\Model;

interface FillerInterface
{
    /**
     * Fill the provided model with the data set and return the updated object.
     *
     * @return Model
     */
    public static function fill(Model $model, array $data): Model;
}
