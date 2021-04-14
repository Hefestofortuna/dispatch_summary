<?php

use yii\db\Migration;

/**
 * Class m210414_155145_add_relation_for_journal_izol_control_table
 */
class m210414_155145_add_relation_for_journal_izol_control_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-journal_izol_control-journal_izol_id',
            'journal_izol_control',
            'journal_izol_id'
        );

        $this->addForeignKey(
            'fk-journal_izol_control-journal_izol_id',
            'journal_izol_control',
            'journal_izol_id',
            'journal_izol',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155145_add_relation_for_journal_izol_control_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155145_add_relation_for_journal_izol_control_table cannot be reverted.\n";

        return false;
    }
    */
}
