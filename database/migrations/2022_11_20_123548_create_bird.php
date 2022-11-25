<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBird extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehati_burung', function (Blueprint $table) {
            $table->id();
            $table->string('id_rth');
            $table->string('nama_rth');
            $table->string('nama_jenis');
            $table->string('spesies');
            $table->integer('jumlah');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('iucn');
            $table->string('keterangan');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('kehati_burung');
    }
}
