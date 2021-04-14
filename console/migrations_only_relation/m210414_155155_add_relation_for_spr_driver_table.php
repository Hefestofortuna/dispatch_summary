<?php

use yii\db\Migration;

/**
 * Class m210414_155155_add_relation_for_spr_driver_table
 */
class m210414_155155_add_relation_for_spr_driver_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-spr_driver-user_id',
            'spr_driver',
            'user_id'
        );

        $this->addForeignKey(
            'fk-spr_driver-user_id',
            'spr_driver',
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
        echo "m210414_155155_add_relation_for_spr_driver_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155155_add_relation_for_spr_driver_table cannot be reverted.\n";

        return false;
    }
    */
}
