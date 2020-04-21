<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sub_competence_id');
            $table->unsignedBigInteger('competence_id');
            $table->text('question_third_person');
            $table->text('question_first_person')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('sub_competence_id')->references('id')->on('sub_competences');
            $table->foreign('competence_id')->references('id')->on('competences');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
