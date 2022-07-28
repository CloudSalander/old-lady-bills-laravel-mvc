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
        Schema::create('food_category', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->text('description')->nullable();
        });

         Schema::create('hygiene_category', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->text('description')->nullable();
        });

        Schema::create('other_category', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_category');
        Schema::dropIfExists('hygiene_category');
        Schema::dropIfExists('other_category');
    }
};
