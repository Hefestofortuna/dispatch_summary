<?php

use yii\db\Migration;

/**
 * Class m210414_155146_add_relation_for_journal_siz_table
 */
class m210414_155146_add_relation_for_journal_siz_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-journal_siz-organization_id',
            'journal_siz',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-journal_siz-organization_id',
            'journal_siz',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_siz-subdivision_id',
            'journal_siz',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-journal_siz-subdivision_id',
            'journal_siz',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_siz-station_id',
            'journal_siz',
            'station_id'
        );

        $this->addForeignKey(
            'fk-journal_siz-station_id',
            'journal_siz',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155146_add_relation_for_journal_siz_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155146_add_relation_for_journal_siz_table cannot be reverted.\n";

        return false;
    }
    */
}
