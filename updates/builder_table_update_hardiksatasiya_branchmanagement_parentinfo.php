<?php namespace HardikSatasiya\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHardiksatasiyaBranchmanagementParentinfo extends Migration
{
    public function up()
    {
        Schema::table('hardiksatasiya_branchmanagement_parentinfo', function($table)
        {
            $table->integer('user_id')->unsigned()->change();
            $table->integer('company_id')->unsigned()->change();
            $table->integer('branch_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('hardiksatasiya_branchmanagement_parentinfo', function($table)
        {
            $table->integer('user_id')->unsigned(false)->change();
            $table->integer('company_id')->unsigned(false)->change();
            $table->integer('branch_id')->unsigned(false)->change();
        });
    }
}
