<?php namespace HardikSatasiya\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHardiksatasiyaBranchmanagementParentinfo extends Migration
{
    public function up()
    {
        Schema::create('hardiksatasiya_branchmanagement_parentinfo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('user_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->integer('branch_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hardiksatasiya_branchmanagement_parentinfo');
    }
}
