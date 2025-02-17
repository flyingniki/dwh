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
        Schema::create('meta_attrs_view', function (Blueprint $table) {
            $table->integer('class_id');
            $table->foreign('class_id')->references('class_id')->on('classes_view');
            $table->string('subclass_id');
            $table->integer('subclass_ord');
            $table->integer('row_ord');
            $table->integer('src_conf_id');
            $table->integer('src_ord');
            $table->integer('src_attr_id');
            $table->string('src_name');
            $table->string('src_type');
            $table->string('src_descr');
            $table->string('src_comments');
            $table->boolean('src_is_subclass');
            $table->string('src_sample_value');
            $table->boolean('src_store_in_dwh');
            $table->integer('src_subclass_id');
            $table->integer('src_ref_to');
            $table->boolean('src_is_drop');
            $table->boolean('src_is_system');
            $table->integer(' src_fk_class');

            $table->integer('src_conf_id_new');
            $table->integer('src_ord_new');
            $table->integer('src_attr_id_new');
            $table->string('src_name_new');
            $table->string('src_type_new');
            $table->string('src_descr_new');
            $table->string('src_comments_new');
            $table->boolean('src_is_subclass_new');
            $table->boolean('src_is_drop_new');
            $table->string('src_sample_value_new');
            $table->boolean('src_store_in_dwh_new');
            $table->integer('src_subclass_id_new');
            $table->integer('src_ref_to_new');
            $table->boolean('src_is_drop_new');
            $table->boolean('src_is_system_new');
            $table->integer(' src_fk_class_new');

            $table->integer('dwh_conf_id');
            $table->integer('dwh_ord');
            $table->integer('dwh_linked_id');
            $table->integer('dwh_attr_id');
            $table->string('dwh_name');
            $table->string('dwh_type');
            $table->string('dwh_descr');
            $table->boolean('dwh_is_pk');
            $table->boolean('dwh_is_mandatory');
            $table->integer('dwh_new_attr_id');
            $table->string('dwh_sample_value');
            $table->boolean('dwh_is_drop');
            $table->boolean('dwh_is_system');
            $table->boolean('dwh_is_auto');
            $table->boolean('dwh_is_unique');
            $table->boolean('dwh_is_indexed');

            $table->integer('dwh_conf_id_new');
            $table->integer('dwh_ord_new');
            $table->integer('dwh_linked_id_new');
            $table->integer('dwh_attr_id_new');
            $table->string('dwh_name_new');
            $table->string('dwh_type_new');
            $table->string('dwh_descr_new');
            $table->boolean('dwh_is_pk_new');
            $table->boolean('dwh_is_mandatory_new');
            $table->string('dwh_sample_value_new');
            $table->boolean('dwh_is_drop_new');
            $table->boolean('dwh_is_system_new');
            $table->boolean('dwh_is_auto_new');
            $table->boolean('dwh_is_unique_new');
            $table->boolean('dwh_is_indexed_new');
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
