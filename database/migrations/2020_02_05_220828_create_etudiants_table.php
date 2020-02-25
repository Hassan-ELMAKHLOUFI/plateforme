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
            $table->bigIncrements('etudiant_id');
            $table->unsignedBigInteger('groupe_id');
            $table->unsignedBigInteger('niveau_id');
            $table->string('cin');
            $table->string('cne');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email_address');
            $table->string('username');
            $table->string('password');
            $table->integer('numero');
            $table->integer('num_apologie');
            $table->timestamps();

            $table->foreign('niveau_id')->references('niveau_id')->on('niveau')->onDelete('cascade');
            //$table->foreign('groupe_id')->references('groupe_id')->on('groupe')->onDelete('cascade');
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
