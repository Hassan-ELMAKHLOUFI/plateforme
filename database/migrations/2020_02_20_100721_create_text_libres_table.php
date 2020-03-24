<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextLibresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_libre', function (Blueprint $table) {
            $table->bigIncrements('question_id');
            $table->unsignedBigInteger('test_id');
            $table->string('question_text');
            $table->integer('note');
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
        Schema::dropIfExists('text_libre');
    }
}
