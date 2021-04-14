<?php

use yii\db\Migration;

/**
 * Class m210414_155147_add_relation_for_journal_spt_table
 */
class m210414_155147_add_relation_for_journal_spt_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-journal_spt-spr_spt_id',
            'journal_spt',
            'spr_spt_id'
        );

        $this->addForeignKey(
            'fk-journal_spt-spr_spt_id',
            'journal_spt',
            'spr_spt_id',
            'spr_spt',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_spt-organization_id',
            'journal_spt',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-journal_spt-organization_id',
            'journal_spt',
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
        echo "m210414_155147_add_relation_for_journal_spt_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155147_add_relation_for_journal_spt_table cannot be reverted.\n";

        return false;
    }
    */
}
