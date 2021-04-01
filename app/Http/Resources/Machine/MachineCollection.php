<?php

namespace App\Http\Resources\Machine;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MachineCollection extends ResourceCollection
{
    public $collects = MachineResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
