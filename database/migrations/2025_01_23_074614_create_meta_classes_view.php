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
                        \"meta_classes_v\" AS
                    SELECT
                        c.class_id,
                        c.class_title AS name,
                        c.in_out,
                        c.source,
                        cc.stage_table,
                        cc.core_table,
                        cc1.core_table AS child_table1,
                        cc2.core_table AS child_table2,
                        c.descr AS description,
                        c.comments,
                        ss.subsystem_name AS subsystem,
                        c.reciever,
                        c.wiki_link,
                        c.load_method,
                        cc.last_updated AS last_updated_dev,
                        cc.conf_id AS conf_id_from
                    FROM
                        (
                            (((((classes c
                            LEFT JOIN subsystems ss ON ((c.subsystem_id = ss.subsystem_id)))
                            LEFT JOIN class_confs cc ON (((c.class_id = cc.class_id) AND (cc.env_id = 2))))
                            LEFT JOIN classes c1 ON (((c.class_id || '.1'::text) = c1.class_id)))
                            LEFT JOIN class_confs cc1 ON (((c1.class_id = cc1.class_id) AND (cc1.env_id = 2))))
                            LEFT JOIN classes c2 ON (((c.class_id || '.2'::text) = c2.class_id)))
                            LEFT JOIN class_confs cc2 ON (((c2.class_id = cc2.class_id) AND (cc2.env_id = 2)))
                        )
                    ORDER BY (\"substring\"(c.class_id, '^\d+\.?\d+'::text))::double precision, c.class_id;"
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS \"meta_classes_v\"");
    }
};
