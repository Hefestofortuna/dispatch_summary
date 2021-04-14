<?php

use yii\db\Migration;

/**
 * Class m210414_155148_add_relation_for_oper_rasp_table
 */
class m210414_155148_add_relation_for_oper_rasp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-oper_rasp-organization_id',
            'oper_rasp',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-oper_rasp-organization_id',
            'oper_rasp',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-oper_rasp-user_id',
            'oper_rasp',
            'user_id'
        );

        $this->addForeignKey(
            'fk-oper_rasp-user_id',
            'oper_rasp',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155148_add_relation_for_oper_rasp_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155148_add_relation_for_oper_rasp_table cannot be reverted.\n";

        return false;
    }
    */
}
