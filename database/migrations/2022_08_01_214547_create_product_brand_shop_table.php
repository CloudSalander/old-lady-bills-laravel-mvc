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
        Schema::create('product_brand_shop', function (Blueprint $table) {
            $table->bigInteger('product_id')->unsigned()->constrained();
            $table->foreign('product_id')->references('product_id')->on('product_brand') 
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->bigInteger('brand_id')->unsigned()->constrained();
            $table->foreign('brand_id')->references('brand_id')->on('product_brand') 
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->bigInteger('shop_id')->unsigned()->constrained();
            $table->foreign('shop_id')->references('id')->on('shop') 
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->primary(['product_id', 'brand_id','shop_id']);
            $table->text('comments')->nullable();
            $table->enum('unit_type',['units','kilograms','liters']);
            $table->float('units',8,2);
            $table->boolean('offer')->default(0);
            $table->datetime('offer_expires')->nullable();
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
        Schema::dropIfExists('product_brand_shop');
    }
};
