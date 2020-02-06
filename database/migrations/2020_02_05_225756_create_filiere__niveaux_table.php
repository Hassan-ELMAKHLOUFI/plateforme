<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiliereNiveauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiere_niveau', function (Blueprint $table) {
            $table->bigIncrements('id_f_n');
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('id_filiere');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('niveau')->onDelete('cascade');
            $table->foreign('id_filiere')->references('id_filiere')->on('filiere')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filiere_niveau');
    }
}
