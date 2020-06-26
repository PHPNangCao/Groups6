<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonNgonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MonNgon', function (Blueprint $table) {
            $table->id();
            $table->string('tieude');
            $table->string('tomtat')->nullable();
            $table->text('noidung');
            $table->integer('luotxem')->default(0);
            $table->string('anh')->nullable();
            $table->boolean('trangthai')->default(1);

            $table->unsignedBigInteger('sanpham_id')->nullable();
            $table->foreign('sanpham_id')->references('id')->on('SanPham');
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
        Schema::dropIfExists('MonNgon');
    }
}
