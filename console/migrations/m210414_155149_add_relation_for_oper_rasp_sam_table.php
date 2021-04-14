<?php

use yii\db\Migration;

/**
 * Class m210414_155149_add_relation_for_oper_rasp_sam_table
 */
class m210414_155149_add_relation_for_oper_rasp_sam_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-oper_rasp_sam-oper_rasp_id',
            'oper_rasp_sam',
            'oper_rasp_id'
        );

        $this->addForeignKey(
            'fk-oper_rasp_sam-oper_rasp_id',
            'oper_rasp_sam',
            'oper_rasp_id',
            'oper_rasp',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155149_add_relation_for_oper_rasp_sam_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155149_add_relation_for_oper_rasp_sam_table cannot be reverted.\n";

        return false;
    }
    */
}
