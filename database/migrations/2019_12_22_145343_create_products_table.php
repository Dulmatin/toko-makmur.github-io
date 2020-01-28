<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('unit_id');
            // $table->foreign('unit_id')
            //         ->references('id')->on('units')
            //         ->onDelete('cascade');
            $table->integer('category_id');
            // $table->foreign('category_id')
            //         ->references('id')->on('categories')
            //         ->onDelete('cascade');
            $table->integer('stock');
            $table->integer('purchase_price');
            $table->integer('sell_price');
            $table->string('image');
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
