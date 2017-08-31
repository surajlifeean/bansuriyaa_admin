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
              $table->integer('pcode');             
              $table->integer('price');
              $table->integer('discount')->default(0);
              $table->string('discount_type')->nullable();
            $table->integer('quantity');
            $table->string('color');
            $table->string('size')->default('Free Size');
            $table->boolean('status');
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
