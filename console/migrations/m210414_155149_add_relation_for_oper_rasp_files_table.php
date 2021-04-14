<?php

use yii\db\Migration;

/**
 * Class m210414_155149_add_relation_for_oper_rasp_files_table
 */
class m210414_155149_add_relation_for_oper_rasp_files_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-oper_rasp_file-oper_rasp_isp_id',
            'oper_rasp_file',
            'oper_rasp_isp_id'
        );

        $this->addForeignKey(
            'fk-oper_rasp_file-oper_rasp_isp_id',
            'oper_rasp_file',
            'oper_rasp_isp_id',
            'oper_rasp_isp',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155149_add_relation_for_oper_rasp_files_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155149_add_relation_for_oper_rasp_files_table cannot be reverted.\n";

        return false;
    }
    */
}
