<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('classes_view', function (Blueprint $table) {
            $table->string('class_id');
            $table->string('class_id')->references('class_id')->on('attrs_view');
            $table->string('name');
            $table->string('in_out');
            $table->string('source');
            $table->string('stage_table');
            $table->string('core_table');
            $table->string('child_table1');
            $table->string('child_table2');
            $table->string('description');
            $table->string('comments');
            $table->string('subsystem');
            $table->string('reciever');
            $table->string('wiki_link');
            $table->string('load_method');
            $table->timestampTz('last_updated_dev');
            $table->integer('conf_id_from');
            $table->integer('env_id_from');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes_view');
    }
};
