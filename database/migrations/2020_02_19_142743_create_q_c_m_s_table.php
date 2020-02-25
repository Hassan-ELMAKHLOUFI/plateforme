<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQCMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QCM', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('question_text');
            $table->double('note');


            $table->timestamps();

            $table->foreign('question_id')->references('question_id')->on('question')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('QCM');
    }
}
