<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_english')->nullable();
            $table->string('name_arabic')->nullable();
            $table->text('description_english')->nullable();
            $table->text('description_arabic')->nullable();
            $table->double('price')->default(0.00)->nullable();
            $table->string('image')->nullable();
            $table->boolean('activated')->default(false);
            $table->integer('category_id')->unsigned()->nullable();;
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
