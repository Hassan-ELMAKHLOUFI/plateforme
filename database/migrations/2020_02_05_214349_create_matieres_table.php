<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere', function (Blueprint $table) {
            $table->bigIncrements('matiere_id');
            $table->string('nom_matiere');
            $table->string('volume_horaire');
            $table->unsignedBigInteger('module_id');
            $table->timestamps();

            $table->foreign('module_id')->references('module_id')->on('module')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matiere');
    }
}
