<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('manufacturer_id');
            $table->string('product_name');
            $table->float('product_price');
            $table->integer('product_quantity');
            $table->integer('reorder_label');
            $table->tinyInteger('is_fetured');
            $table->text('product_short_description');
            $table->text('product_long_description');
            $table->string('product_image');
            $table->tinyInteger('publication_status');
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
        Schema::drop('tbl_product');
    }
}
