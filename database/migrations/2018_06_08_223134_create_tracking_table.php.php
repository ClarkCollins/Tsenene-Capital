<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateTrackingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();
            $table->enum('business_product_understandable', ['Yes','No'])->nullable();
            $table->longtext('business_product_understandable_detail')->nullable();
            $table->enum('strategy_executable', ['Yes','No'])->nullable();
            $table->longtext('strategy_executable_detail')->nullable();
            $table->enum('outstanding_founders', ['Yes','No'])->nullable();
            $table->longtext('outstanding_founders_detail')->nullable();
            $table->enum('bbbee_requirements', ['Yes','No'])->nullable();
            $table->longtext('bbbee_requirements_detail')->nullable();          
            $table->longtext('project_background')->nullable();
            $table->longtext('institutional_imperative')->nullable();
            $table->longtext('technical_exellency')->nullable();          
            $table->longtext('efficiency_effectiveness')->nullable();
            $table->longtext('strategy_execution_speed')->nullable();
            $table->longtext('optimization_framework')->nullable();          
            $table->longtext('operational_excellency_activities')->nullable();
            $table->longtext('market_feasibility')->nullable();
            $table->longtext('fund_effectiveness')->nullable();
            $table->longtext('allocation_efficiency')->nullable();
            $table->longtext('positive_growth')->nullable();
            $table->longtext('gdp_contribution')->nullable();
            $table->longtext('business_profitable')->nullable();
            $table->longtext('sound_allocation')->nullable();
            $table->longtext('findings')->nullable();
            $table->integer('assessed_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('tracking');
    }
}
