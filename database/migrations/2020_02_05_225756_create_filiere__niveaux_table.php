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
            $table->unsignedBigInteger('niveau_id');
            $table->unsignedBigInteger('filiere_id');
            $table->timestamps();

            $table->foreign('niveau_id')->references('id')->on('niveau')->onDelete('cascade');
            $table->foreign('filiere_id')->references('id_filiere')->on('filiere')->onDelete('cascade');
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
