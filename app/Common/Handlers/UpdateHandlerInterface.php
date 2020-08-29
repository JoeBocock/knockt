<?php

namespace App\Common\Handlers;

use Illuminate\Database\Eloquent\Model;

interface UpdateHandlerInterface
{
    /**
     * Undocumented function
     *
     * Preform update assigment and save.
     *
     * @param Model $model
     * @param array $validatedValues
     * @return Model
     */
    public static function update(Model $model, array $validatedValues): Model;
}
