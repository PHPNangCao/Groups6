<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuyenDungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TuyenDung', function (Blueprint $table) {
            $table->id();
            $table->string('tieude');
            $table->string('anh')->nullable();
            $table->string('mota');
            $table->integer('lienhe')->nullable();
            $table->boolean('tinhtrang')->default(1);
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
        Schema::dropIfExists('TuyenDung');
    }
}
