<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleFilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_filiere', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_module')->nullable('false')->unique();
            $table->unsignedBigInteger('id_filiere');
            $table->timestamps();

            $table->foreign('id_module')->references('id_module')->on('module')->onDelete('cascade');
            $table->foreign('id_filiere')->references('id_filiere')->on('filiere')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_filiere');
    }
}
