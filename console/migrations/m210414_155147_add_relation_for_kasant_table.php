<?php

use yii\db\Migration;

/**
 * Class m210414_155147_add_relation_for_kasant_table
 */
class m210414_155147_add_relation_for_kasant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-kasant-user_id',
            'kasant',
            'user_id'
        );

        $this->addForeignKey(
            'fk-kasant-user_id',
            'kasant',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-kasant-organization_id',
            'kasant',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-kasant-organization_id',
            'kasant',
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
        echo "m210414_155147_add_relation_for_kasant_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155147_add_relation_for_kasant_table cannot be reverted.\n";

        return false;
    }
    */
}
