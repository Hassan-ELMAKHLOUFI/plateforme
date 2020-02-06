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
            $table->unsignedBigInteger('id_module')->nullable('false')->unique();
            $table->unsignedBigInteger('id_math')->nullable('false')->unique();
            $table->unsignedBigInteger('id_prof')->nullable('false')->unique();
            $table->string('cin');
            $table->unsignedBigInteger('grade');
            $table->timestamps();

            $table->foreign('id_module')->references('id_module')->on('matiere')->onDelete('cascade');
            $table->foreign('id_math')->references('id_math')->on('matiere')->onDelete('cascade');
            $table->foreign('id_prof')->references('id')->on('professeur')->onDelete('cascade');

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
