<?php

namespace App\Http\Resources\Machine\Collections;

use App\Http\Resources\Machine\Machine;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MachineCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = Machine::class;

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
