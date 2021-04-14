<?php

use yii\db\Migration;

/**
 * Class m210414_155139_add_relation_for_subdivision_table
 */
class m210414_155139_add_relation_for_subdivision_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-subdivision-user_id',
            'subdivision',
            'user_id'
        );

        $this->addForeignKey(
            'fk-subdivision-user_id',
            'subdivision',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-subdivision-organization_id',
            'subdivision',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-subdivision-organization_id',
            'subdivision',
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
        echo "m210414_155139_add_relation_for_subdivision_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155139_add_relation_for_subdivision_table cannot be reverted.\n";

        return false;
    }
    */
}
