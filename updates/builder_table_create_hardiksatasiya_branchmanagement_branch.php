<?php namespace HardikSatasiya\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHardiksatasiyaBranchmanagementBranch extends Migration
{
    public function up()
    {
        Schema::create('hardiksatasiya_branchmanagement_branch', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('director_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hardiksatasiya_branchmanagement_branch');
    }
}
