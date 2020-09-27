<?php

namespace App\Http\Resources\Slot;

use App\Http\Resources\Row\RelationlessRow;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Contracts\HasResourceLinks;
use App\Http\Resources\Product\RelationlessProduct;

class Slot extends JsonResource
{
    use HasResourceLinks;

    /**
     * Map the available named routes for this resource
     *
     * @var array
     */
    private $routeMapping = [
        'index' => ['row_id'],
        'store' => [],
        'show' => ['slot'],
        'update' => ['slot'],
        'destroy' => ['slot'],
        'purchase' => ['slot'],
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
            'row' => new RelationlessRow($this->row),
            'links' => $this->generateResourceLinks(['slot' => $this->id, 'row_id' => $this->row->id]),
            'product' => new RelationlessProduct($this->product),
        ];
    }
}
