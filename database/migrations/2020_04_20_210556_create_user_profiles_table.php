<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('company_id');
            $table->string('matriculation');
            $table->integer('kind_person');
            $table->tinyInteger('situation')->default(1);
            $table->integer('manager_id')->nullable();
            $table->boolean('is_a_manager')->default(false);
            $table->integer('schooling')->nullable();
            $table->string('languages')->nullable();
            $table->string('individual_registration');
            $table->string('individual_general_registration')->nullable();
            $table->string('photo')->nullable();
            $table->date('admission_date');
            $table->text('comments')->nullable();
            $table->integer('role')->default(100);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('company_id')->references('id')->on('companies');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
