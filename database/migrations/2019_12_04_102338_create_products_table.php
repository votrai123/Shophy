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
            $table->string('ProName');
            $table->text('ProDescription')->nullable();
            $table->float('unit_price',8,2);
            $table->float('promotion_price',8,2)->nullable();
            $table->string('ProImage')->nullable();
            $table->string('ProUnit')->nullable();
            $table->tinyInteger('ProNew');
            $table->integer('like');
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
        Schema::dropIfExists('products');
    }
}
