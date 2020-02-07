<?php

class m200207_080417_MySqlEavActiveRecordsTables extends CDbMigration
{
    public function up()
    {
        $sql = file_get_contents(__DIR__ . '/../schema/mysql.sql');
        $this->execute($sql);

    }

    public function down()
    {
        $tablesToDrop = [
            'eav_attribute_money',
            'eav_attribute_numeric',
            'eav_attribute_text',
            'eav_attribute_int',
            'eav_attribute_varchar',
            'eav_attribute_date',
            'eav_attribute_set',
            'eav_attribute',
            'eav_set',
        ];
        foreach ($tablesToDrop as $table) {
            $this->execute("DROP TABLE IF EXISTS $table");
        }
    }
}