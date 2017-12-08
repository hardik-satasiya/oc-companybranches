<?php namespace HardikSatasiya\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHardiksatasiyaBranchmanagementParentinfo2 extends Migration
{
    public function up()
    {
        Schema::table('hardiksatasiya_branchmanagement_parentinfo', function($table)
        {
            $table->integer('company_id')->nullable()->change();
            $table->integer('branch_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('hardiksatasiya_branchmanagement_parentinfo', function($table)
        {
            $table->integer('company_id')->nullable(false)->change();
            $table->integer('branch_id')->nullable(false)->change();
        });
    }
}
