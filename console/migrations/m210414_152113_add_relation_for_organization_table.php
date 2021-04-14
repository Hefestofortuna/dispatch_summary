<?php

use yii\db\Migration;

/**
 * Class m210414_152113_add_relation_for_organization_table
 */
class m210414_152113_add_relation_for_organization_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-organization-user_id',
            'organization',
            'user_id'
        );

        $this->addForeignKey(
            'fk-organization-user_id',
            'organization',
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
        echo "m210414_152113_add_relation_for_organization_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_152113_add_relation_for_organization_table cannot be reverted.\n";

        return false;
    }
    */
}
