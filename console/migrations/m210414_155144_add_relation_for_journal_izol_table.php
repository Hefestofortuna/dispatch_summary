<?php

use yii\db\Migration;

/**
 * Class m210414_155144_add_relation_for_journal_izol_table
 */
class m210414_155144_add_relation_for_journal_izol_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-journal_izol-organization_id',
            'journal_izol',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-journal_izol-organization_id',
            'journal_izol',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_izol-shns_user_id',
            'journal_izol',
            'shns_user_id'
        );

        $this->addForeignKey(
            'fk-journal_izol-shns_user_id',
            'journal_izol',
            'shns_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_izol-station_id',
            'journal_izol',
            'station_id'
        );

        $this->addForeignKey(
            'fk-journal_izol-station_id',
            'journal_izol',
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
        echo "m210414_155144_add_relation_for_journal_izol_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155144_add_relation_for_journal_izol_table cannot be reverted.\n";

        return false;
    }
    */
}
