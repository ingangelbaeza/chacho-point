<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->comment('id del producto');
            $table->string('name')->comment('nombre del producto');
            $table->decimal('price',8, 2)->comment('precio neto del producto');
            $table->integer('units_contains')->comment('unidades que contiene el producto');
            $table->decimal('unit_price',8, 2)->comment('precio por unidad del producto');
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
        Schema::dropIfExists('products');
    }
};
