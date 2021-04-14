<?php

use yii\db\Migration;

/**
 * Class m210414_155146_add_relation_for_journal_revision_ot_file_table
 */
class m210414_155146_add_relation_for_journal_revision_ot_file_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-journal_revision_ot_file-journal_revision_ot_id',
            'journal_revision_ot_file',
            'journal_revision_ot_id'
        );

        $this->addForeignKey(
            'fk-journal_revision_ot_file-journal_revision_ot_id',
            'journal_revision_ot_file',
            'journal_revision_ot_id',
            'journal_revision_ot',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155146_add_relation_for_journal_revision_ot_file_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155146_add_relation_for_journal_revision_ot_file_table cannot be reverted.\n";

        return false;
    }
    */
}
