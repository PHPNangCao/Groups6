<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuyendungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuyendung', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tuyendung_tieu_de');
            $table->string('tuyendung_url');
            $table->string('tuyendung_anh');
            $table->longText('tuyendung_mo_ta');
            $table->longText('tuyendung_lien_he');
            $table->integer('tuyendung_thoi_gian');
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
        Schema::dropIfExists('tuyendung');
    }
}
