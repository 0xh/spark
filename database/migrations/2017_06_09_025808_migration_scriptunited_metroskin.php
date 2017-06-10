<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrationScriptunitedMetroskin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group_title',100)->unique();
            $table->string('group_description')->nullable();
            $table->timestamps();
        });

        Schema::create('user_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id');
            $table->integer('user_id');
            $table->timestamps();
        });

        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('module_controller',100)->unique();
            $table->string('module_title');
            $table->string('module_subtitle');
            $table->string('module_description')->nullable();
            $table->string('module_author')->nullable();
            $table->string('module_db_type')->nullable(); // eloquent || fluent
            $table->string('module_table')->nullable();
            $table->string('module_table_key')->nullable();
            $table->string('module_type')->nullable();
            $table->string('module_lang')->nullable();
            $table->text('module_option')->nullable();
            $table->timestamps();
        });

        Schema::create('module_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('module_id');
            $table->integer('group_id');
            $table->text('access_data')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
        Schema::dropIfExists('user_groups');
        Schema::dropIfExists('modules');
        Schema::dropIfExists('module_groups');
    }
    
}
