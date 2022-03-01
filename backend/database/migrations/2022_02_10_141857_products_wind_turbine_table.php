<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsWindTurbineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_wind_turbines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('model');
            $table->integer('power');
            $table->decimal('height', 4, 2);
            $table->decimal('rotor_diameter', 4, 2);
            $table->integer('year');
            $table->string('image');
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
        Schema::dropIfExists('products_wind_turbines');
    }
}
