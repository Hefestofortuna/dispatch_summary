<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journal_izol_control}}`.
 */
class m210408_123921_create_journal_izol_control_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journal_izol_control}}', [
            'id' => $this->primaryKey(),
            'journal_izol_id' => $this->integer()->notNull()->comment('Кабель'),
            'putdate' => $this->integer()->notNull()->comment('Дата проверки'),
            'r_izol' => $this->float('10,3')->defaultValue('0.000')->comment('R изоляции'),
        ]);

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
        $this->dropTable('{{%journal_izol_control}}');
    }
}
