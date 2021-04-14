<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%window}}`.
 */
class m210406_160207_create_window_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%window}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата'),
            'organization' => $this->string()->notNull()->comment('Предприятие'),
            'work' => $this->string()->notNull()->comment('Работа'),
            'place' => $this->string()->notNull()->comment('Место'),
            'plan' => $this->string()->comment('План. время'),
            'hozed' => $this->string()->comment('Хоз. ед'),
            'leader' => $this->string()->comment('Руководитель'),
            'spec' => $this->string()->comment('Особые требования'),
            'description' => $this->string()->comment('Примечание'),
            'transfer_user_id' => $this->integer()->comment('Передано'),
            'user_id' => $this->integer()->notNull()->comment('Пользователь'),
        ]);

        $this->createIndex(
            'idx-window-transfer_user_id',
            'window',
            'transfer_user_id'
        );

        $this->addForeignKey(
            'fk-window-transfer_user_id',
            'window',
            'transfer_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-window-user_id',
            'window',
            'user_id'
        );

        $this->addForeignKey(
            'fk-window-user_id',
            'window',
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
        $this->dropTable('{{%window}}');
    }
}
