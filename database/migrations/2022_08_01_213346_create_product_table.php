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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->float('tax',3,2);
            $table->text('comments');
            $table->bigInteger('food_category_id')->unsigned()->nullable()->constrained();
            $table->foreign('food_category_id')->references('id')->on('food_category') 
                    ->onUpdate('restrict')
                    ->onDelete('restrict');
            $table->bigInteger('hygiene_category_id')->unsigned()->nullable()->constrained();
            $table->foreign('hygiene_category_id')->references('id')->on('hygiene_category') 
                    ->onUpdate('restrict')
                    ->onDelete('restrict');
            $table->bigInteger('others_category_id')->unsigned()->nullable()->constrained();
            $table->foreign('others_category_id')->references('id')->on('other_category')
                    ->onUpdate('restrict')
                    ->onDelete('restrict');          
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
        Schema::dropIfExists('product');
    }
};
