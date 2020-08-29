<?php

namespace App\Common\Handlers;

use Illuminate\Database\Eloquent\Model;

class UpdateMachineHandler implements UpdateHandlerInterface
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
    public static function update(Model $machine, array $validatedValues): Model
    {
        $machine->name = $validatedValues['name'];
        $machine->status = $validatedValues['status'];
        $machine->save();

        return $machine;
    }
}
