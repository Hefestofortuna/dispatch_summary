<?php

use yii\db\Migration;

/**
 * Class m210414_155144_add_relation_for_incoming_table
 */
class m210414_155144_add_relation_for_incoming_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-incoming-organization_id',
            'incoming',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-incoming-organization_id',
            'incoming',
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
        echo "m210414_155144_add_relation_for_incoming_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155144_add_relation_for_incoming_table cannot be reverted.\n";

        return false;
    }
    */
}
