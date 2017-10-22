<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subproducts', function (Blueprint $table) {
             $table->increments('id');
              $table->string('product_id');
              $table->string('pcode');             
              $table->integer('price');
              $table->integer('sale_price');
            $table->integer('quantity');
            
            $table->string('color');
            $table->string('size')->default('Free Size');
            $table->boolean('status');
            $table->boolean('new_arrival')->nullable();
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
        Schema::dropIfExists('subproducts');
    }
}
