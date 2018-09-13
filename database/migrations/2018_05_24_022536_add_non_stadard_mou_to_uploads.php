<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNonStadardMouToUploads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uploads', function($table)
        {
             $table->string('non_standard_mou')->nullable()->after('standard_mou');

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('uploads', function($table)
        {
            $table->dropColumn('non_standard_mou');
        });  
    }    
    
}
