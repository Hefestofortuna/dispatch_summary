<?php

use yii\db\Migration;

/**
 * Class m210414_155149_add_relation_for_oper_rasp_isp_table
 */
class m210414_155149_add_relation_for_oper_rasp_isp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-oper_rasp_isp-oper_rasp_id',
            'oper_rasp_isp',
            'oper_rasp_id'
        );

        $this->addForeignKey(
            'fk-oper_rasp_isp-oper_rasp_id',
            'oper_rasp_isp',
            'oper_rasp_id',
            'oper_rasp',
            'id',
            'CASCADE'
        );


        $this->createIndex(
            'idx-oper_rasp_isp-oper_rasp_sam_id',
            'oper_rasp_isp',
            'oper_rasp_sam_id'
        );

        $this->addForeignKey(
            'fk-oper_rasp_isp-oper_rasp_sam_id',
            'oper_rasp_isp',
            'oper_rasp_sam_id',
            'oper_rasp_sam',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-oper_rasp_isp-isp_user_id',
            'oper_rasp_isp',
            'isp_user_id'
        );

        $this->addForeignKey(
            'fk-oper_rasp_isp-isp_user_id',
            'oper_rasp_isp',
            'isp_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-oper_rasp_isp-agreed_user_id',
            'oper_rasp_isp',
            'agreed_user_id'
        );

        $this->addForeignKey(
            'fk-oper_rasp_isp-agreed_user_id',
            'oper_rasp_isp',
            'agreed_user_id',
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
        echo "m210414_155149_add_relation_for_oper_rasp_isp_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155149_add_relation_for_oper_rasp_isp_table cannot be reverted.\n";

        return false;
    }
    */
}
