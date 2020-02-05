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
            $table->bigIncrements('id_filiere');
            $table->String('nomf');
            $table->String('cord');
            $table->date('date_cr');
            $table->date('date_fin');
            $table->unsignedBigInteger('id_departement');

            $table->foreign('id_departement')->references('id_dep')->on('departements')->onDelete('cascade');

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
        $table->dropForeign('id_departement');
    }
}
