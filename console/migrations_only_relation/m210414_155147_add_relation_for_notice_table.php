<?php

use yii\db\Migration;

/**
 * Class m210414_155147_add_relation_for_notice_table
 */
class m210414_155147_add_relation_for_notice_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-notice-user_id',
            'notice',
            'user_id'
        );

        $this->addForeignKey(
            'fk-notice-user_id',
            'notice',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-notice-subdivision_id',
            'msu',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-notice-subdivision_id',
            'notice',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-notice-organization_id',
            'notice',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-notice-organization_id',
            'notice',
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
        echo "m210414_155147_add_relation_for_notice_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155147_add_relation_for_notice_table cannot be reverted.\n";

        return false;
    }
    */
}
