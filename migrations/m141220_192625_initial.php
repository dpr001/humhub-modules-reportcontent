<?php

class m141220_192625_initial extends humhub\components\Migration
{

    public function up()
    {
        $this->createTable('report_content', array(
            'id' => 'pk',
            'object_model' => 'varchar(100) NOT NULL',
            'object_id' => 'int(11) NOT NULL',
            'reason' => 'int(11) NOT NULL',
            'report_description' => 'varchar(500)',
            'created_at' => 'datetime DEFAULT NULL',
            'created_by' => 'int(11) NOT NULL',
            'updated_at' => 'datetime DEFAULT NULL',
            'updated_by' => 'int(11) DEFAULT NULL'
        ), '');
        
        $this->createTable('report_content_feedback', [
            'id' => $this->primaryKey(),
            'report_content_id' => 'int(11) NOT NULL',
            'feedback_message' => 'varchar(500) NOT NULL'
        ]);
        
        $this->addForeignKey('fk_report_content_id', 'report_content_feedback', 'report_content_id', 'report_content', 'id');
    }

    public function down()
    {
        echo "m141220_192625_initial does not support migration down.\n";
        return false;
    }
}

?>