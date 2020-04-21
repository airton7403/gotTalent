<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_competence_id');
            $table->string('name');
            $table->tinyInteger('status')->default(1);
            $table->text('observation')->nullable();
            $table->timestamps();


            $table->foreign('type_competence_id')->references('id')->on('type_competences');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competences');
    }
}
