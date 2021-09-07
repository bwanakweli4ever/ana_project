<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TreeResource extends JsonResource
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
            'tree_name' => $this->tree_name,
            'description' => $this->description,
            'status' => $this->status,
            'available_number' => $this->available_number,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
