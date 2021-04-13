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
            'putdate' => $this->date()->notNull(),
            'organization' => $this->string()->notNull(),
            'work' => $this->string()->notNull(),
            'place' => $this->string()->notNull(),
            'plan' => $this->string(),
            'hozed' => $this->string(),
            'leader' => $this->string(),
            'spec' => $this->string(),
            'description' => $this->string(),
            'transfer_user_id' => $this->integer(),
            'user_id' => $this->integer()->notNull(),
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
