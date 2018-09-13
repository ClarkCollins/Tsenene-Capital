<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('financial_statement');
            $table->integer('assessed_by')->unsigned();
            $table->datetime('assessed_at');
            $table->enum('assessment_status', ['pending','complete','action_required']);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('assessed_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uploads');
    }
}
