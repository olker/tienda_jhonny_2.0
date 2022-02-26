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
        Schema::create('doblaje_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doblaje_id')->unsigned();
            $table->foreign('doblaje_id')
                ->unique()
                ->references('id')
                ->on('doblajes');
            $table->unsignedBigInteger('item_id')->unsigned();
            $table->foreign('item_id')
                ->unique()
                ->references('id')
                ->on('items');
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
        Schema::dropIfExists('doblaje_item');
    }
};
