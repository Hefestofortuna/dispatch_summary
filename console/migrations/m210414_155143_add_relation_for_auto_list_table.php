<?php

use yii\db\Migration;

/**
 * Class m210414_155143_add_relation_for_auto_list_table
 */
class m210414_155143_add_relation_for_auto_list_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-auto_list-user_id',
            'auto_list',
            'user_id'
        );

        $this->addForeignKey(
            'fk-auto_list-user_id',
            'auto_list',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-auto_list-auto_id',
            'auto_list',
            'auto_id'
        );

        $this->addForeignKey(
            'fk-auto_list-auto_id',
            'auto_list',
            'auto_id',
            'spr_auto',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-auto_list-organization_id',
            'auto_list',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-auto_list-organization_id',
            'auto_list',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155143_add_relation_for_auto_list_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155143_add_relation_for_auto_list_table cannot be reverted.\n";

        return false;
    }
    */
}
