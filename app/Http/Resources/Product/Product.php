<?php

namespace App\Http\Resources\Product;

use App\Common\API\Wrappers\Money;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Contracts\HasResourceLinks;
use App\Http\Resources\Slot\Collections\RelationlessSlotCollection;

class Product extends JsonResource
{
    use HasResourceLinks;

    /**
     * Map the available named routes for this resource
     *
     * @var array
     */
    private $routeMapping = [
        'index' => [],
        'store' => [],
        'show' => ['product'],
        'update' => ['product'],
        'destroy' => ['product'],
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
            'price' => Money::prettify($this->price),
            'stock' => $this->stock,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'links' => $this->generateResourceLinks(['product' => $this->id]),
            'slots' => new RelationlessSlotCollection($this->slots),
        ];
    }
}
