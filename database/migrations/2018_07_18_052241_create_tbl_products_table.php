<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('category_id');
            $table->integer('manufac_id');
            $table->string('pro_name');
            $table->longtext('pro_des');
            $table->longtext('pro_l_des');
            $table->float('pro_price');
            $table->string('pro_img');
            $table->string('pro_size');
             $table->string('pro_color');
            $table->integer('public_status');
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
        Schema::dropIfExists('tbl_products');
    }
}
