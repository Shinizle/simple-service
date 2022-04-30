<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use App\Models\VehicleFactory;
use App\Models\VehicleType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VehicleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [['name' => 'Mobil', 'created_at' => Carbon::now()], ['name' => 'Motor', 'created_at' => Carbon::now()]];
        VehicleType::insert($types);

        $factories = [
            ['name' => 'Toyota', 'country' => 'Japan', 'created_at' => Carbon::now() ],
            ['name' => 'Daihatsu', 'country' => 'Japan', 'created_at' => Carbon::now() ],
            ['name' => 'Nissan', 'country' => 'Japan', 'created_at' => Carbon::now() ],
            ['name' => 'Yamaha', 'country' => 'Japan', 'created_at' => Carbon::now() ],
            ['name' => 'Honda', 'country' => 'Japan', 'created_at' => Carbon::now() ],
            ['name' => 'Suzuki', 'country' => 'Japan', 'created_at' => Carbon::now()],
        ];
        VehicleFactory::insert($factories);

        $vehicles = [
            [
                'name' => 'Avanza',
                'vehicle_factory_id' => VehicleFactory::whereName('Toyota')->first()->id,
                'vehicle_type_id' => VehicleType::whereName('Mobil')->first()->id,
                'production_year' => 2022,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Innova',
                'vehicle_factory_id' => VehicleFactory::whereName('Toyota')->first()->id,
                'vehicle_type_id' => VehicleType::whereName('Mobil')->first()->id,
                'production_year' => 2022,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Xenia',
                'vehicle_factory_id' => VehicleFactory::whereName('Daihatsu')->first()->id,
                'vehicle_type_id' => VehicleType::whereName('Mobil')->first()->id,
                'production_year' => 2022,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Ayla',
                'vehicle_factory_id' => VehicleFactory::whereName('Daihatsu')->first()->id,
                'vehicle_type_id' => VehicleType::whereName('Mobil')->first()->id,
                'production_year' => 2022,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Juke',
                'vehicle_factory_id' => VehicleFactory::whereName('Nissan')->first()->id,
                'vehicle_type_id' => VehicleType::whereName('Mobil')->first()->id,
                'production_year' => 2022,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Livina',
                'vehicle_factory_id' => VehicleFactory::whereName('Nissan')->first()->id,
                'vehicle_type_id' => VehicleType::whereName('Mobil')->first()->id,
                'production_year' => 2022,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Vario',
                'vehicle_factory_id' => VehicleFactory::whereName('Honda')->first()->id,
                'vehicle_type_id' => VehicleType::whereName('Motor')->first()->id,
                'production_year' => 2022,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'CBR',
                'vehicle_factory_id' => VehicleFactory::whereName('Honda')->first()->id,
                'vehicle_type_id' => VehicleType::whereName('Motor')->first()->id,
                'production_year' => 2022,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Mio',
                'vehicle_factory_id' => VehicleFactory::whereName('Yamaha')->first()->id,
                'vehicle_type_id' => VehicleType::whereName('Motor')->first()->id,
                'production_year' => 2022,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'R15',
                'vehicle_factory_id' => VehicleFactory::whereName('Yamaha')->first()->id,
                'vehicle_type_id' => VehicleType::whereName('Motor')->first()->id,
                'production_year' => 2022,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Spin',
                'vehicle_factory_id' => VehicleFactory::whereName('Suzuki')->first()->id,
                'vehicle_type_id' => VehicleType::whereName('Motor')->first()->id,
                'production_year' => 2022,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Satria',
                'vehicle_factory_id' => VehicleFactory::whereName('Suzuki')->first()->id,
                'vehicle_type_id' => VehicleType::whereName('Motor')->first()->id,
                'production_year' => 2022,
                'created_at' => Carbon::now()
            ],
        ];

        Vehicle::insert($vehicles);
    }
}
