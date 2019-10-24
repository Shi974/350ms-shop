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
            $table -> bigIncrements('id');
            $table -> timestamps();
            $table -> string('name');
            $table -> string('format');
            $table -> string('genre');
            $table -> string('genre_2') -> nullable();
            $table -> integer('stock');
            $table -> float('sellingprice');
            $table -> float('buyingprice') -> nullable();
            $table -> string('picture') -> nullable();
            $table -> string('picture_2') -> nullable();
            $table -> float('rating') -> nullable();
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
