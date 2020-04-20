<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('company_id');

            $table->string('title');
            $table->boolean('performance_module')->default(0);
            $table->boolean('goals_module')->default(0);
            $table->boolean('devolopment_plan_module')->default(0);
            $table->boolean('banknote_calibration')->default(0);
            $table->boolean('results')->default(0);
            $table->boolean('message_box')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->date('release_date');
            $table->date('closing_date');
            $table->text('comments')->nullable();
            $table->string('token');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
