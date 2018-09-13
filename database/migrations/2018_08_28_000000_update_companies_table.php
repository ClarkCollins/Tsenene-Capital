<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function($table)
 {
            $table->string('Tracked')->default('No');
            $table->string('documents_upload')->default('No');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('companies', function($table)
            {
                $table->dropColumn('tracked');
                $table->dropColumn('documents_upload');

            });
    }
}
