<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professeur', function (Blueprint $table) {
            $table->bigIncrements('professeur_id');
            $table->unsignedBigInteger('departement_id');
            $table->string('cin');
            $table->string('nom');
            $table->string('prenom');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->integer('grade');

            $table->foreign('departement_id')->references('departement_id')->on('departement')->onDelete('cascade');
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
        Schema::dropIfExists('professeur');
    }
}
