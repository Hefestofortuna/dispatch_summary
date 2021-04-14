<?php

use yii\db\Migration;

/**
 * Class m210414_155145_add_relation_for_incoming_sam_table
 */
class m210414_155145_add_relation_for_incoming_sam_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-incoming_sam-isp_user_id',
            'incoming_sam',
            'isp_user_id'
        );

        $this->addForeignKey(
            'fk-incoming_sam-isp_user_id',
            'incoming_sam',
            'isp_user_id',
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
        echo "m210414_155145_add_relation_for_incoming_sam_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155145_add_relation_for_incoming_sam_table cannot be reverted.\n";

        return false;
    }
    */
}
