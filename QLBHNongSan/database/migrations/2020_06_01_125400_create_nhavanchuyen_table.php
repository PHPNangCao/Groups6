<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhavanchuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhavanchuyen', function (Blueprint $table) {
            $table->id();
            $table->string('ten_nhacungcap');
            $table->string('diachi');
            $table->integer('donhang_id');
            $table->foreign('donhang_id')->references('id')->on('donhang')->onUpdate('cascade');
            $table->date('thoi_gian_nhan');
            $table->date('Thoi_gian_van_chuyen');
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
        Schema::dropIfExists('nhavanchuyen');
    }
}
