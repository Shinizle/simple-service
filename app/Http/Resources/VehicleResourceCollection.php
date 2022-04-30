<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class VehicleResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($item){
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'description' => $item->description,
                    'vehicle_type' => new VehicleTypeResource($item->vehicleType),
                    'vehicle_factory' => new VehicleTypeResource($item->vehicleFactory),
                    'production_year' => $item->production_year,
                    'created_at' => $item->created_at,
                    'updated_at' => $item->updated_at,
                ];
            }),
            'pagination' => [
                'total' => $this->total(),
                'count' => $this->count(),
                'per_page' => $this->perPage(),
                'current_page' => $this->currentPage(),
                'total_pages' => $this->lastPage()
            ]
        ];
    }
}
