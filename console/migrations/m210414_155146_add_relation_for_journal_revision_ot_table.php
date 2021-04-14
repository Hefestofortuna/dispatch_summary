<?php

use yii\db\Migration;

/**
 * Class m210414_155146_add_relation_for_journal_revision_ot_table
 */
class m210414_155146_add_relation_for_journal_revision_ot_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-journal_revision_ot-organization_id',
            'journal_revision_ot',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-journal_revision_ot-organization_id',
            'journal_revision_ot',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_revision_ot-second_kom_user_id',
            'journal_revision_ot',
            'first_kom_user_id'
        );

        $this->addForeignKey(
            'fk-journal_revision_ot-second_kom_user_id',
            'journal_revision_ot',
            'second_kom_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_revision_ot-first_kom_user_id',
            'journal_revision_ot',
            'first_kom_user_id'
        );

        $this->addForeignKey(
            'fk-journal_revision_ot-first_kom_user_id',
            'journal_revision_ot',
            'first_kom_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_revision_ot-subdivision_id',
            'journal_revision_ot',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-journal_revision_ot-subdivision_id',
            'journal_revision_ot',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_revision_ot-station_id',
            'journal_revision_ot',
            'station_id'
        );

        $this->addForeignKey(
            'fk-journal_revision_ot-station_id',
            'journal_revision_ot',
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
        echo "m210414_155146_add_relation_for_journal_revision_ot_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155146_add_relation_for_journal_revision_ot_table cannot be reverted.\n";

        return false;
    }
    */
}
