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
                        dc.data_class_id,
                        dc.data_class_name,
                        dc.data_class_direct,
                        dc.data_class_source,
                        dc.data_class_dr,
                        dc.data_class_dict,
                        dc.child_table1,
                        dc.child_table2,
                        di.description,
                        di.subsystem,
                        di.reciever,
                        di.wiki_link,
                        di.load_method,
                        di.last_updated_dev
                    FROM
                        (
                            data_classes dc
                            LEFT JOIN data_info di ON ((dc.data_class_id = di.data_class_id))
                        );"
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
