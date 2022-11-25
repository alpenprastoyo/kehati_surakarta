<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehati_pohon', function (Blueprint $table) {
            $table->id();
            $table->string('id_rth');
            $table->string('nama_rth');
            $table->string('pcq');
            $table->string('nama_jenis');
            $table->string('spesies');
            $table->float('tinggi',8,2);
            $table->integer('keliling');
            $table->float('diameter',11,3);
            $table->float('jarak_pohon',8,1);
            $table->float('panjang_coverage',8,1);
            $table->float('lebar_coverage',8,1);
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
        Schema::dropIfExists('kehati_pohon');
    }
}
