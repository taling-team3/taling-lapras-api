<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class TalentDetailRequest extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $hasManyParams = array();
        // $hasManyParams['applications'] = $this->application;
        // $hasManyParams['images'] = $this->images;
        // $hasManyParams['days'] = $this->days;
        return array_merge(parent::toArray($request), $hasManyParams);
    }
}
