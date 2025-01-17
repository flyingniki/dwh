<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement(
            "CREATE VIEW
                        \"meta_class_attrs_v\" AS
                    SELECT
                        a.class_id,
                        a.ord,
                        a.source_attr,
                        a.descr,
                        a.stage_attr,
                        a.stage_attr_prev,
                        a.stage_data_type,
                        a.stage_data_type_prev,
                        a.is_pk,
                        a.is_mandatory,
                        a.core_attr,
                        a.core_attr_prev
                    FROM ((meta.classes c
                        LEFT JOIN meta.class_confs cc ON (((c.class_id = cc.class_id) AND (cc.env_id = 2))))
                        LEFT JOIN meta.attrs a ON (((cc.conf_id = a.conf_id) AND (c.class_id = a.class_id))))
                    ORDER BY (\"substring\"(c.class_id, '^\d+\.?\d+'::text))::double precision, c.class_id, a.ord;"
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"meta_class_attrs_v\"");
    }
};
