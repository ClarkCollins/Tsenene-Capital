<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsForUploads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('uploads', function($table)
        {
            
        
            $table->string('year_3_cashflow_statement')->nullable()->after('id');
            $table->string('year_3_fin_statement')->nullable()->after('id');
            $table->string('year_2_cashflow_statement')->nullable()->after('id');
            $table->string('year_2_fin_statement')->nullable()->after('id');
            $table->string('year_cashflow_statement')->nullable()->after('id');
            $table->string('year_fin_statement')->nullable()->after('id');
            $table->string('qtr_cashflow_statement')->nullable()->after('id');
            $table->string('qtr_fin_statement')->nullable()->after('id');
            $table->date('start_of_operations')->nullable()->after('id');
            $table->string('standard_mou')->nullable()->after('id');
            $table->string('bee_certificate')->nullable()->after('id');
            $table->string('has_bee_certificate')->nullable()->after('id');

            
            
                       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::table('uploads', function($table)
            {
                $table->dropColumn('has_bee_certificate');
                $table->dropColumn('bee_certificate');
                $table->dropColumn('standard_mou');
                $table->dropColumn('non_standard_mou');
                $table->dropColumn('start_of_operations');
                $table->dropColumn('qtr_fin_statement');
                $table->dropColumn('qtr_cashflow_statement');
                $table->dropColumn('year_fin_statement');
                $table->dropColumn('year_cashflow_statement');
                $table->dropColumn('year_2_fin_statement');
                $table->dropColumn('year_2_cashflow_statement');
                $table->dropColumn('year_3_fin_statement');  
                $table->dropColumn('year_3_cashflow_statement');

            });
    }
}
