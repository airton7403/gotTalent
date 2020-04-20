<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanybranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_branches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');

            $table->string('name');
            $table->string('domain');
            $table->string('domain_talent');
            $table->string('logo')->nullable();
            $table->string('legal_registration');
            $table->string('state_registration');
            $table->string('municipal_registration');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('city_suffix');
            $table->string('street_name');
            $table->string('secondary_address');
            $table->string('building_number');
            $table->string('postcode');
            $table->text('note')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('company_branches');
    }
}
