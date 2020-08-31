<?php

namespace App\Http\Resources\Row\Collections;

use App\Http\Resources\Row\Row;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RowCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = Row::class;

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
