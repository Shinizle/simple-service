<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->bigInteger('vehicle_factory_id')->unsigned();;
            $table->bigInteger('vehicle_type_id')->unsigned();;
            $table->foreign('vehicle_factory_id')->references('id')->on('vehicle_factories');
            $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types');
            $table->decimal('production_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
