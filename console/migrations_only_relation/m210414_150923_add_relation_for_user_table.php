<?php

use yii\db\Migration;

/**
 * Class m210414_150923_add_relation_for_user_table
 */
class m210414_150923_add_relation_for_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-user-subdivision_id',
            'user',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-user-subdivision_id',
            'user',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-user-organization_id',
            'user',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-user-organization_id',
            'user',
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
        echo "m210414_150923_add_relation_for_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_150923_add_relation_for_user_table cannot be reverted.\n";

        return false;
    }
    */
}
