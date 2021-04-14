<?php

use yii\db\Migration;

/**
 * Class m210414_155140_add_relation_for_movement_table
 */
class m210414_155140_add_relation_for_movement_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-movement-organization_id',
            'movement',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-movement-organization_id',
            'movement',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-movement-status_id',
            'movement',
            'status_id'
        );

        $this->addForeignKey(
            'fk-movement-status_id',
            'movement',
            'status_id',
            'status',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-movement-user_id',
            'movement',
            'user_id'
        );

        $this->addForeignKey(
            'fk-movement-user_id',
            'movement',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-movement-subdivision_id',
            'movement',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-movement-subdivision_id',
            'movement',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155140_add_relation_for_movement_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155140_add_relation_for_movement_table cannot be reverted.\n";

        return false;
    }
    */
}
