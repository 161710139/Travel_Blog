<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomentarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentars', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('artikel_id');
            $table->foreign('artikel_id')->references('id')->on('artikels')->onDelete('CASCADE');
            $table->unsignedInteger('member_id');
            $table->foreign('member_id')->references('id')->on('members')->onDelete('CASCADE');
            $table->String('komentar');
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
        Schema::dropIfExists('komentars');
    }
}
