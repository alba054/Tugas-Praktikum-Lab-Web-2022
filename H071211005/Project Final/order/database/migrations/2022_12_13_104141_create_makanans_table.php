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
        Schema::create('makanans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('description');
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('tag');
            $table->timestamps();

            $table->foreign('tag')->references('id')->on('tags')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('category')->references('id')->on('categories')->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makanans');
    }
};
