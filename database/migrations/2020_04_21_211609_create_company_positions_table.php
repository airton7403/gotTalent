<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_positions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('name');
            $table->text('objective_position')->nullable();
            $table->text('responsibility_and_duties')->nullable();
            $table->text('complexity_and_challenges')->nullable();
            $table->integer('schooling')->nullable();
            $table->text('languages')->nullable();
            $table->text('collaborator_profile')->nullable();
            $table->text('experience')->nullable();
            $table->text('especific_knowledge')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_positions');
    }
}
