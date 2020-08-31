<?php

namespace App\Http\Resources\Slot\Collections;

use App\Http\Resources\Slot\RelationlessSlot;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RelationlessSlotCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = RelationlessSlot::class;

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
