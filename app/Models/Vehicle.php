<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'vehicle_factory_id',
        'vehicle_type_id',
        'vehicle_factory_id',
        'vehicle_type_id',
        'production_year',
    ];

    public function vehicleFactory()
    {
        return $this->belongsTo(VehicleFactory::class);
    }

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }
}
