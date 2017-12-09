<?php namespace HardikSatasiya\BranchManagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHardiksatasiyaBranchmanagementAds extends Migration
{
    public function up()
    {
        Schema::create('hardiksatasiya_branchmanagement_ads', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('banner')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hardiksatasiya_branchmanagement_ads');
    }
}
