<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Spt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_spt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('masa_pajak');
            $table->string('tahun_pajak');
            $table->string('Pembetulan');
            $table->string('no_bukti_pot');
            $table->string('masa_awal');
            $table->string('masa_akhir');
            $table->string('npwp');
            $table->string('nik');
            $table->string('nama');
            $table->string('alamat');
            $table->string('jk');
            $table->string('st_ptkp');
            $table->string('j_tangg');
            $table->string('nama_jab');
            $table->string('wp_ln');
            $table->string('kn');
            $table->string('kp');
            $table->string('j_1');
            $table->string('j_2');
            $table->string('j_3');
            $table->string('j_4');
            $table->string('j_5');
            $table->string('j_6');
            $table->string('j_7');
            $table->string('j_8');
            $table->string('j_9');
            $table->string('j_10');
            $table->string('j_11');
            $table->string('j_12');
            $table->string('j_13');
            $table->string('j_14');
            $table->string('j_15');
            $table->string('j_16');
            $table->string('j_17');
            $table->string('j_18');
            $table->string('j_19');
            $table->string('j_20');
            $table->string('st_pindah');
            $table->string('npwp_pm');
            $table->string('nama_pm');
            $table->string('tgl_bukti');
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
        //
    }
}
