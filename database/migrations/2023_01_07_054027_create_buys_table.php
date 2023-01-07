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
        Schema::create('buys', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->comment('id de la compra');
            $table->date('date_purchase')->comment('fecha de compra');
            $table->foreignId('product_id')->comment('id del producto que se compro');
            $table->integer('amount')->comment('cantidad o numero que se compro del producto');
            $table->decimal('subtotal',8, 2)
                ->comment('precio final de la compra = cantidad * precio neto del producto');

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
        Schema::dropIfExists('buys');
    }
};
