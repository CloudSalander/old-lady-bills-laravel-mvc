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
        Schema::create('product_brand', function (Blueprint $table) {
            $table->bigInteger('product_id')->unsigned()->constrained();
            $table->foreign('product_id')->references('id')->on('product') 
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->bigInteger('brand_id')->unsigned()->constrained();
            $table->foreign('brand_id')->references('id')->on('brand') 
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->primary(['product_id', 'brand_id']);
            $table->text('comments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_brand');
    }
};
