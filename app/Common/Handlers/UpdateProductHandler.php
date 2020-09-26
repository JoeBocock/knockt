<?php

namespace App\Common\Handlers;

use Illuminate\Database\Eloquent\Model;

class UpdateProductHandler implements UpdateHandlerInterface
{
    /**
     * Update a single product.
     *
     * Preform update assigment and save.
     *
     * @param Model $model
     * @param array $validatedValues
     * @return Model
     */
    public static function update(Model $product, array $validatedValues): Model
    {
        $product->name = $validatedValues['name'];
        $product->price = $validatedValues['price'];
        $product->stock = $validatedValues['stock'];
        $product->save();

        return $product;
    }
}
