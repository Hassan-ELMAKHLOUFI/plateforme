<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
                $table->bigIncrements('test_id');
                $table->string('nom');
                $table->double('note');
                $table->string('duree');
                $table->string('salle');
                $table->date('date');
                $table->string('discription');
                $table->unsignedBigInteger('matiere_id');
                $table->unsignedBigInteger('professeur_id');
                $table->timestamps();

            $table->foreign('professeur_id')->references('professeur_id')->on('professeur')->onDelete('cascade');
            $table->foreign('matiere_id')->references('matiere_id')->on('matiere')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
