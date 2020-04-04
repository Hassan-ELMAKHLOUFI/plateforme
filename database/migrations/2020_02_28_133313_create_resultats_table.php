<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultat', function (Blueprint $table) {
            $table->bigIncrements('resultat_id');
            $table->unsignedBigInteger('session_id');
            $table->double('note_total');
            $table->timestamps();

            $table->foreign('session_id')->references('session_id')->on('session')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultat');
    }
}
