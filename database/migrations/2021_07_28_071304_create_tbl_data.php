<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_data', function (Blueprint $table) {
            $table->id('id');
            $table->string('badge');
            $table->string('name');
            $table->string('tmpt_lahir');
            $table->string('tgl_lahir');
            $table->text('alamat');
            $table->string('kel');
            $table->string('kec');
            $table->string('kab_kot');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('no_hp');
            $table->string('atas_nama');
            $table->string('no_rek');
            $table->string('bank');
            $table->string('npwp');
            $table->string('st_pensiun');
            $table->string('st_pernikahan');
            $table->string('tgl_mnkh')->nullable();
            $table->string('tgl_cerai')->nullable();
            $table->string('mniggal')->nullable();
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
        Schema::dropIfExists('tbl_data');
    }
}
