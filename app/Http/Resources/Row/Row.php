<?php

namespace App\Http\Resources\Row;

use App\Http\Resources\Machine\RelationlessMachine;
use App\Http\Resources\Slot\Collections\RelationlessSlotCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class Row extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'machine' => new RelationlessMachine($this->machine),
            'slots' => new RelationlessSlotCollection($this->slots),
        ];
    }
}
