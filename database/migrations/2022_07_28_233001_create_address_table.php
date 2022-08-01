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
        if (Schema::hasTable('shop')) {
            Schema::create('shop_address', function (Blueprint $table) {
                $table->id();
                $table->string('street',45);
                $table->string('number',10);
                $table->string('zip',15);
                $table->string('city',50);
                $table->string('country',50);
                $table->text('comments')->nullable();
                $table->bigInteger('shop_id')->unsigned();
                $table->foreign('shop_id')->references('id')->on('shop');
                $table->timestamps();
            });
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_address');
    }
};
