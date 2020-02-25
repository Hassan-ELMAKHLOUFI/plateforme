<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateFilieresTable extends Migration
{



    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('filiere', function (Blueprint $table) {
            $table->bigIncrements('filiere_id');
            $table->String('nom');
            $table->String('coordinateur');
            $table->date('datedebut');
            $table->date('datefin');
            $table->unsignedBigInteger('departement_id');
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
        Schema::dropIfExists('filiere');
    }
}
