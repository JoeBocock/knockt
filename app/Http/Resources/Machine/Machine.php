<?php

namespace App\Http\Resources\Machine;

use App\Common\Labels\MachineLabel;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Row\Collections\RelationlessRowCollection;

class Machine extends JsonResource
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
            'status_value' => $this->status,
            'status_label' => MachineLabel::Label($this->status),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'rows' => new RelationlessRowCollection($this->rows),
        ];
    }
}
