<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatiereProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere_prof', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('matiere_id')->nullable('false')->unique();
            $table->unsignedBigInteger('professeur_id')->nullable('false')->unique();
            $table->timestamps();


            $table->foreign('matiere_id')->references('matiere_id')->on('matiere')->onDelete('cascade');
            $table->foreign('professeur_id')->references('professeur_id')->on('professeur')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matiere_prof');
    }
}
