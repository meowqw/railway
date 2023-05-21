<?php

namespace App\Http\Resources\Schedule;

use App\Http\Resources\Locality\LocalityResource;
use App\Http\Resources\Train\TrainResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'id' => $this->id,
            'train' => new TrainResource($this->train),
            'from' => new LocalityResource($this->from),
            'to' => new LocalityResource($this->to),
            'date' => $this->date,
            'travel_time' => $this->travel_time
        ];
    }
}
