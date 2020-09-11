<?php

namespace App\Common\Handlers;

use Illuminate\Database\Eloquent\Model;

class UpdateSlotHandler implements UpdateHandlerInterface
{
    /**
     * Update a single slot.
     *
     * Preform update assigment and save.
     *
     * @param Model $model
     * @param array $validatedValues
     * @return Model
     */
    public static function update(Model $slot, array $validatedValues): Model
    {
        $slot->name = $validatedValues['name'];
        $slot->row_id = $validatedValues['row_id'];
        $slot->save();

        return $slot;
    }
}
