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
        Schema::create('order_has_product_brand_shop', function (Blueprint $table) {
            $table->bigInteger('order_id')->unsigned()->constrained();
            $table->foreign('order_id')->references('id')->on('order') 
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->bigInteger('product_id')->unsigned()->constrained();
            $table->foreign('product_id')->references('product_id')->on('product_brand_shop') 
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->bigInteger('brand_id')->unsigned()->constrained();
            $table->foreign('brand_id')->references('brand_id')->on('product_brand_shop')    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->bigInteger('shop_id')->unsigned()->constrained();
            $table->foreign('shop_id')->references('shop_id')->on('product_brand_shop') 
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->enum('unit_type',['units','kilograms','liters']);
            $table->float('units',8,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_has_product_brand_shop');
    }
};
