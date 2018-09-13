<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('website_url')->nullable();
            $table->string('industry')->nullable();
            $table->enum('has_bank_account', ['Yes','No'])->nullable();
            $table->integer('bank_id')->unsigned();
            $table->longtext('mission_statement')->nullable();
            $table->longtext('activity_description')->nullable();
            $table->integer('primary_contact_number')->nullable();
            $table->string('primary_contact_email')->unique();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bank_id')->references('id')->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
