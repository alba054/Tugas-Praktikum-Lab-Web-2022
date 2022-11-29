<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('category_id');
            $table->bigInteger('price');
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign("seller_id")->references("id")->on("sellers")->onDelete('cascade');
            $table->foreign("category_id")->references("id")->on("categories")->onDelete('cascade');
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
};
