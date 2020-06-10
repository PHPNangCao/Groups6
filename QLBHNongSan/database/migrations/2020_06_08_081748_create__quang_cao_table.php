<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuangCaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QuangCao', function (Blueprint $table) {
            $table->id();
            $table->string('anh');
            $table->boolean('trangthai')->default(1);
            $table->unsignedBigInteger('khuyenmai_id');
            $table->foreign('khuyenmai_id')->references('id')->on('KhuyenMai');
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
        Schema::dropIfExists('QuangCao');
    }
}
