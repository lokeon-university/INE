<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 256)->nullable(false)->unique();
            $table->string('description', 500)->nullable(false);
            $table->string('imgurl', 256)->nullable(false);
            $table->float('price')->nullable(false);
            $table->integer('discountPercent')->nullable(true);
            $table->dateTime('discountStart_at')->nullable(true);
            $table->dateTime('discountEnd_at')->nullable(true);
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
        Schema::dropIfExists('Product');
    }
}
