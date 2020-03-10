<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binaire', function (Blueprint $table) {
            $table->bigIncrements('binaire_id');
            $table->unsignedBigInteger('test_id');

            $table->string('question_text');
            $table->double('note');


            $table->timestamps();

            $table->foreign('test_id')->references('test_id')->on('test')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('binaires');
    }
}
