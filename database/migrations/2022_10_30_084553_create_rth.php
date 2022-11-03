<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehati_rth', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('jenis');
            $table->string('lokasi');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('luas');
            $table->string('keterangan_luas');
            $table->string('catatan');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('tim');
            $table->string('jumlah_pcc');
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
        Schema::dropIfExists('kehati_rth');
    }
}
