<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Players extends JsonResource
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
            'last_name' => $this->last_name,
            'points' => $this->points,
           
        ];
        // return parent::toArray($request);
    }
}
