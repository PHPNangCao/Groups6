<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMatkhauToKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('khachhang', function (Blueprint $table) {
            $table->string('matkhau', 50)->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('khachhang', function (Blueprint $table) {
            if (Schema::hasColumn('khachhang', 'matkhau')) {
                $table->dropColumn('matkhau');
            }
        });
    }
}
