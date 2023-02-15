<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFormBaruToBukutamusTable extends Migration
{
    public function up()
    {
        Schema::table('bukutamus', function (Blueprint $table) {
            $table->integer('usia')->after('keterangan');
            $table->string('jenis_kelamin')->after('usia');
            $table->string('pendidikan')->after('jenis_kelamin');
            $table->string('pekerjaan')->after('pendidikan');
        });
    }

    public function down()
    {
        Schema::table('bukutamus', function (Blueprint $table) {
            Schema::dropIfExists('bukutamus');
        });
    }
}
