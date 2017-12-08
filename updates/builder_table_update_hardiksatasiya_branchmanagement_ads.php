<?php namespace HardikSatasiya\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHardiksatasiyaBranchmanagementAds extends Migration
{
    public function up()
    {
        Schema::table('hardiksatasiya_branchmanagement_ads', function($table)
        {
            $table->integer('branch_id')->nullable()->unsigned();
            $table->increments('id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('hardiksatasiya_branchmanagement_ads', function($table)
        {
            $table->dropColumn('branch_id');
            $table->increments('id')->unsigned(false)->change();
        });
    }
}
