<?php namespace HardikSatasiya\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHardiksatasiyaBranchmanagementBranch2 extends Migration
{
    public function up()
    {
        Schema::table('hardiksatasiya_branchmanagement_branch', function($table)
        {
            $table->string('slug')->nullable();
            $table->increments('id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('hardiksatasiya_branchmanagement_branch', function($table)
        {
            $table->dropColumn('slug');
            $table->increments('id')->unsigned(false)->change();
        });
    }
}
