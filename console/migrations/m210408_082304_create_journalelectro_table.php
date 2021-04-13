<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journalelectro}}`.
 */
class m210408_082304_create_journalelectro_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journalelectro}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата передачи показания'),
            'indication' => $this->integer()->notNull()->comment('Показание счетчика'),
            'user_id' => $this->integer()->notNull()->comment('Пользователь'),
            'sprelectro_id' => $this->integer()->notNull()->comment('Тип счетчика/номер'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);

        $this->createIndex(
            'idx-journalelectro-organization_id',
            'journalelectro',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-journalelectro-organization_id',
            'journalelectro',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journalelectro-sprelectro_id',
            'journalelectro',
            'sprelectro_id'
        );

        $this->addForeignKey(
            'fk-journalelectro-sprelectro_id',
            'journalelectro',
            'sprelectro_id',
            'sprelectro',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journalelectro-user_id',
            'journalelectro',
            'user_id'
        );

        $this->addForeignKey(
            'fk-journalelectro-user_id',
            'journalelectro',
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
        $this->dropTable('{{%journalelectro}}');
    }
}
