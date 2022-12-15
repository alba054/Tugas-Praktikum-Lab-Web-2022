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
        Schema::create('pesanan_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('makanan_id');
            $table->unsignedBigInteger('pesanan_id');
            $table->unsignedBigInteger('jumlah_pesanan');

            $table->timestamps();

            $table->foreign('makanan_id')->references('id')->on('makanans')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('pesanan_id')->references('id')->on('pesanans')->onDelete("cascade")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_users');
    }
};
