<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReponseTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponse_text', function (Blueprint $table) {
            $table->bigIncrements('reponse_text_id');
            $table->unsignedBigInteger('test_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('etudiant_id');
            $table->binary('fichier');
            $table->timestamps();

            $table->foreign('test_id')->references('test_id')->on('test_libre')->onDelete('cascade');
            $table->foreign('question_id')->references('question_id')->on('test_libre')->onDelete('cascade');
            $table->foreign('etudiant_id')->references('etudiant_id')->on('etudiant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reponse_text');
    }
}
