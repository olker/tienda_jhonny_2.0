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
        Schema::create('cliente_item', function (Blueprint $table) {
            $table->id();
            $table->integer('estado')->unsigned();
            $table->integer('cantidad')->unsigned();
            $table->unsignedBigInteger('cliente_id')->unsigned();
            $table->foreign('cliente_id')
                ->unique()
                ->references('id')
                ->on('clientes');
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
        Schema::dropIfExists('cliente_item');
    }
};
