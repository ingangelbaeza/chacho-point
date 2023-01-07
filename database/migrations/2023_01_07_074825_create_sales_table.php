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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->comment('id de la venta');
            $table->date('sale_date')->comment('fecha de la venta');
            $table->foreignId('product_id')->comment('id del producto que se vendio');
            $table->integer('amount')->comment('cantidad o numero que se vendio del producto');
            $table->decimal('subtotal',8, 2)
                ->comment('precio final de la venta = cantidad * precio neto del producto');
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
        Schema::dropIfExists('sales');
    }
};
