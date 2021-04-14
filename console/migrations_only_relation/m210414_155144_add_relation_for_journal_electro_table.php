<?php

use yii\db\Migration;

/**
 * Class m210414_155144_add_relation_for_journal_electro_table
 */
class m210414_155144_add_relation_for_journal_electro_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-journal_electro-organization_id',
            'journal_electro',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-journal_electro-organization_id',
            'journal_electro',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_electro-sprelectro_id',
            'journal_electro',
            'sprelectro_id'
        );

        $this->addForeignKey(
            'fk-journal_electro-sprelectro_id',
            'journal_electro',
            'sprelectro_id',
            'sprelectro',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_electro-user_id',
            'journal_electro',
            'user_id'
        );

        $this->addForeignKey(
            'fk-journal_electro-user_id',
            'journal_electro',
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
        echo "m210414_155144_add_relation_for_journal_electro_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155144_add_relation_for_journal_electro_table cannot be reverted.\n";

        return false;
    }
    */
}
