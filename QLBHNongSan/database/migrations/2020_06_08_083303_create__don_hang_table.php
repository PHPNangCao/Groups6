<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DonHang', function (Blueprint $table) {
            $table->id();
            $table->string('nguoinhan');
            $table->string('nguoinhan_email')->nullable();
            $table->integer('sdt');
            $table->string('ghichu')->nullable();
            $table->integer('tongtien');
            $table->boolean('tinhtrang')->default(0);
            $table->unsignedBigInteger('sanpham_id');
            $table->foreign('sanpham_id')->references('id')->on('SanPham');
            $table->unsignedBigInteger('khachhang_id')->nullable();
            $table->foreign('khachhang_id')->references('id')->on('KhachHang');
            $table->unsignedBigInteger('phuongthucthanhtoan_id');
            $table->foreign('phuongthucthanhtoan_id')->references('id')->on('PhuongThucThanhToan');
            $table->unsignedBigInteger('nhavanchuyen_id')->nullable();
            $table->foreign('nhavanchuyen_id')->references('id')->on('NhaVanChuyen');
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
        Schema::dropIfExists('DonHang');
    }
}
