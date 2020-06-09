<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPham', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->string('anh');
            $table->string('mota');
            $table->boolean('trangthai')->default(1);
            $table->unsignedBigInteger('loaisanpham_id');
            $table->foreign('loaisanpham_id')->references('id')->on('LoaiSanPham');
            $table->unsignedBigInteger('donvitinh_id');
            $table->foreign('donvitinh_id')->references('id')->on('DonViTinh');
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
        Schema::dropIfExists('SanPham');
    }
}
