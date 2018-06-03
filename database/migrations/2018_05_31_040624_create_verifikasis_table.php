<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifikasis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_artikel');
            $table->longText('isi_artikel');
            $table->string('penulis');
            $table->unsignedInteger('destinasi_id');
            $table->foreign('destinasi_id')->references('id')->on('destinasis')->onDelete('CASCADE');
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
        Schema::dropIfExists('verifikasis');
    }
}
