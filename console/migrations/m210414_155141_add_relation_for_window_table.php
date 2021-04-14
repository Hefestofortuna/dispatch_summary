<?php

use yii\db\Migration;

/**
 * Class m210414_155141_add_relation_for_window_table
 */
class m210414_155141_add_relation_for_window_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createIndex(
            'idx-window-transfer_user_id',
            'window',
            'transfer_user_id'
        );

        $this->addForeignKey(
            'fk-window-transfer_user_id',
            'window',
            'transfer_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-window-user_id',
            'window',
            'user_id'
        );

        $this->addForeignKey(
            'fk-window-user_id',
            'window',
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
        echo "m210414_155141_add_relation_for_window_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155141_add_relation_for_window_table cannot be reverted.\n";

        return false;
    }
    */
}
