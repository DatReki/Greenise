<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsSolarPanelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_solar_panels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('model');
            $table->integer('max_power');
            $table->decimal('efficiency', 4, 2);
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
        Schema::dropIfExists('products_solar_panels');
    }
}
