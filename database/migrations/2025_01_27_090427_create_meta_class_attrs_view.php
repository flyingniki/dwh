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
        Schema::create('meta_class_attrs_view', function (Blueprint $table) {
            $table->integer('class_id');
            $table->foreign('class_id')->references('class_id')->on('meta_classes_view');
            $table->string('subclass_id');
            $table->integer('subclass_ord');
            $table->integer('from_ord');
            $table->integer('to_ord');
            $table->integer('row_ord');
            $table->integer('from_id');
            $table->string('from_name');
            $table->string('from_type');
            $table->string('from_descr');
            $table->boolean('from_is_subclass');
            $table->integer('to_id');
            $table->string('to_name');
            $table->string('to_type');
            $table->string('to_descr');
            $table->boolean('to_is_pk');
            $table->boolean('to_is_mandatory');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_class_attrs_view');
    }
};
