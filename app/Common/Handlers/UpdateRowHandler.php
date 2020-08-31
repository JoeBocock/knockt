<?php

namespace App\Common\Handlers;

use Illuminate\Database\Eloquent\Model;

class UpdateRowHandler implements UpdateHandlerInterface
{
    /**
     * Update a single row.
     *
     * Preform update assigment and save.
     *
     * @param Model $model
     * @param array $validatedValues
     * @return Model
     */
    public static function update(Model $row, array $validatedValues): Model
    {
        $row->name = $validatedValues['name'];
        $row->machine_id = $validatedValues['machine_id'];
        $row->save();

        return $row;
    }
}
