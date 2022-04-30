<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleFactory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'country',
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
