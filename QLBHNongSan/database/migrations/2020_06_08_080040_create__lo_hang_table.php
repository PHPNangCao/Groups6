<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LoHang', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->string('ngaysudung');
            $table->integer('giamuavao');
            $table->integer('giabanra');
            $table->integer('soluongnhap');
            $table->boolean('tinhtrang')->default(0);
            $table->timestamps();
            $table->unsignedBigInteger('sanpham_id');
            $table->foreign('sanpham_id')->references('id')->on('SanPham');
            $table->unsignedBigInteger('nhacungcap_id');
            $table->foreign('nhacungcap_id')->references('id')->on('NhaCungCap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LoHang');
    }
}
