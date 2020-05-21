<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Booking extends JsonResource
{
    public function toArray($request)
    {
        return [
            'start' => $this->checkin,
            'end' => $this->checkout,
            'title' => $this->room->name,
        ];
         
    }
}
