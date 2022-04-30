<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\VehicleResourceCollection;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function getVehicles($type = null, $factory = null)
    {
        $data = $this->mapData($type, $factory)->paginate();

        return new VehicleResourceCollection($data);
    }

    private function mapData($type, $factory)
    {
        $data = Vehicle::query();
        if ($type) {
            $data = $data->whereHas('vehicleType', function ($query) use ($type) {
               $query->whereName($type);
            });
        }
        if ($factory) {
            $data = $data->whereHas('vehicleFactory', function ($query) use ($factory) {
               $query->whereName($factory);
            });
        }

        return $data->orderBy('created_at', 'DESC');
    }
}
