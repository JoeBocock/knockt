<?php

namespace App\Http\Resources\Row;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Contracts\HasResourceLinks;
use App\Http\Resources\Machine\RelationlessMachine;
use App\Http\Resources\Slot\Collections\RelationlessSlotCollection;

class Row extends JsonResource
{
    use HasResourceLinks;

    /**
     * Map the available named routes for this resource
     *
     * @var array
     */
    private $routeMapping = [
        'index' => ['machine_id'],
        'store' => [],
        'show' => ['row'],
        'update' => ['row'],
        'destroy' => ['row'],
    ];

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
            'links' => $this->generateResourceLinks(['row' => $this->id, 'machine_id' => $this->machine->id]),
            'slots' => new RelationlessSlotCollection($this->slots),
        ];
    }
}
