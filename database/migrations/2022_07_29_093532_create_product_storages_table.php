<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductStoragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('product_storages', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->bigInteger('category_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->string('price');
            $table->string('quantity');

            $table->timestamps();


            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_storages');
    }
}
