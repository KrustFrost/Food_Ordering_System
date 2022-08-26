<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResourceOrders extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        return [
            'id' => $this->id,
            'Pizza' => $this->Pizza,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'total_cost' => $this->total_cost,
            'ordered_by' => $this->ordered_by,
        ];
    }
}
