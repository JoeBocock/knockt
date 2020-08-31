<?php

namespace App\Http\Resources\Row\Collections;

use App\Http\Resources\Row\RelationlessRow;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RelationlessRowCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = RelationlessRow::class;

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
