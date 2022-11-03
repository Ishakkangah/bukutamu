<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThumbnailToBukutamusTable extends Migration
{
    public function up()
    {
        Schema::table('bukutamus', function (Blueprint $table) {
            $table->string('thumbnail')->after('name')->nullable();
        });
    }

    public function down()
    {
        Schema::table('bukutamus', function (Blueprint $table) {
            Schema::dropIfExists('bukutamus');
        });
    }
}
