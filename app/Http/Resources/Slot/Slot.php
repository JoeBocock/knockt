<?php

namespace App\Http\Resources\Slot;

use App\Http\Resources\Row\RelationlessRow;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Product\RelationlessProduct;

class Slot extends JsonResource
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
            'row' => new RelationlessRow($this->row),
            'product' => new RelationlessProduct($this->product),
        ];
    }
}
