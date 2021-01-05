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
            $table->id();
            $table->integer('category_id');
            $table->string('title');
            $table->string('code');
            $table->float('price')->default('0');
            $table->text('display_type')->nullable();
            $table->text('display_diagonal')->nullable();
            $table->text('sim')->nullable();
            $table->text('ram')->nullable();
            $table->text('memory')->nullable();
            $table->text('os')->nullable();
            $table->text('camera')->nullable();
            $table->text('front_camera')->nullable();
            $table->text('cpu')->nullable();
            $table->text('bluetooth')->nullable();
            $table->text('image')->nullable();
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
