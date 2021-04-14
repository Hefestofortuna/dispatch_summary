<?php

use yii\db\Migration;

/**
 * Class m210414_155152_add_relation_for_rework_table
 */
class m210414_155152_add_relation_for_rework_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-rework-organization_id',
            'rework',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-rework-organization_id',
            'rework',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-rework-user_id',
            'rework',
            'user_id'
        );

        $this->addForeignKey(
            'fk-rework-user_id',
            'rework',
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
        echo "m210414_155152_add_relation_for_rework_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155152_add_relation_for_rework_table cannot be reverted.\n";

        return false;
    }
    */
}
