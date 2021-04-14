<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journal_electro}}`.
 */
class m210408_082304_create_journal_electro_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journal_electro}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата передачи показания'),
            'indication' => $this->integer()->notNull()->comment('Показание счетчика'),
            'user_id' => $this->integer()->notNull()->comment('Пользователь'),
            'sprelectro_id' => $this->integer()->notNull()->comment('Тип счетчика/номер'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);

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
        $this->dropTable('{{%journal_electro}}');
    }
}
