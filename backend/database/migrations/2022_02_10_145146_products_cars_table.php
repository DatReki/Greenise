<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('model');
            $table->integer('battery');
            $table->integer('range');
            $table->integer('top_speed');
            $table->decimal('acceleration', 4, 2);
            $table->string('motor');
            $table->decimal('power_consumption', 4, 2);
            $table->dateTime('production_start');
            $table->string('production_end');
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
        Schema::dropIfExists('products_cars');
    }
}
