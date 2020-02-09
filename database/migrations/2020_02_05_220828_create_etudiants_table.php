<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_niveau');
            $table->string('cin');
            $table->string('cne');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->integer('numero');
            $table->integer('num_apologie');
            $table->timestamps();

            $table->foreign('id_niveau')->references('id')->on('niveau')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiant');
    }
}
