<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_keluarga', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_kk');
            $table->string('nik');
            $table->string('ket');
            $table->string('tgl_lahir');
            $table->integer('user_id');
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
        Schema::dropIfExists('tbl_keluarga');
    }
}
