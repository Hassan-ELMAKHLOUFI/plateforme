<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session', function (Blueprint $table) {
            $table->bigIncrements('session_id');
            $table->unsignedBigInteger('etudiant_id');
            $table->unsignedBigInteger('test_id');
            $table->string('username');
            $table->string('password');
            $table->boolean('active')->default(false);
            $table->timestamps();

            $table->foreign('etudiant_id')->references('etudiant_id')->on('etudiant')->onDelete('cascade');
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
        Schema::dropIfExists('session');
    }
}
