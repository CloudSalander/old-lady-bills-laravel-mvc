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
        Schema::create('shop', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->text('comments')->nullable();
            $table->string('url',150)->nullable();
            $table->string('phone',45)->nullable();
            $table->string('email',45)->nullable();
            $table->boolean('online')->default(0);
            $table->enum('type',['single','market','supermarket','other']);
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
        Schema::dropIfExists('shop');
    }
};
