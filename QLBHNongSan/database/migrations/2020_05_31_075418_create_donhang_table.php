<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('donhang_nguoi_nhan');
            $table->string('donhang_nguoi_nhan_email');
            $table->string('donhang_nguoi_nhan_sdt');
            $table->string('donhang_nguoi_nhan_dia_chi');
            $table->longText('donhang_ghi_chu');
            $table->decimal('donhang_tong_tien');
            
            $table->integer('khachhang_id')->unsigned();
            $table->foreign('khachhang_id')->references('id')->on('khachhang')->onUpdate('cascade');
            
            $table->integer('hinhthucthanhtoan_id')->unsigned();
            $table->foreign('hinhthucthanhtoan_id')->references('id')->on('hinhthucthanhtoan')->onUpdate('cascade');
            
            $table->integer('tinhtranghd_id')->unsigned();
            $table->foreign('tinhtranghd_id')->references('id')->on('tinhtranghd')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}