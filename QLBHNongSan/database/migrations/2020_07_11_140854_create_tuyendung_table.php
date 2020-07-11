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
            $table->id();
            $table->string('tieude');
            $table->string('url')->nullable();
            $table->string('anh')->nullable();
            $table->longText('mota');
            $table->string('lienhe');
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
        Schema::dropIfExists('tuyendung');
    }
}
