<?php

namespace App\Http\Resources\Product\Collections;

use App\Http\Resources\Product\RelationlessProduct;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RelationlessProductCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = RelationlessProduct::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
