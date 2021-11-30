<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('item_code');
            $table->string('name');
            $table->string('number_register');
            $table->string('brand');
            $table->string('size');
            $table->string('material');
            $table->integer('purchased');
            $table->string('no_factory')->nullable();
            $table->string('no_frame')->nullable();
            $table->string('no_machine')->nullable();
            $table->string('no_police')->nullable();
            $table->string('no_bpkb')->nullable();
            $table->string('origin')->nullable();
            $table->string('price');
            $table->text('description')->nullable();
            $table->text('qrcode')->nullable();
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
        Schema::dropIfExists('items');
    }
}
