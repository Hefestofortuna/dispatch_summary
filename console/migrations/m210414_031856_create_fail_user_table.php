<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%fail_user}}`.
 */
class m210414_031856_create_fail_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%fail_user}}', [
            'id' => $this->primaryKey(),
            'fail_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-fail_user-user_id',
            'fail_user',
            'user_id'
        );

        $this->addForeignKey(
            'fk-fail_user-user_id',
            'fail_user',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-fail_user-fail_id',
            'fail_user',
            'fail_id'
        );

        $this->addForeignKey(
            'fk-fail_user-fail_id',
            'fail_user',
            'fail_id',
            'fail',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%fail_user}}');
    }
}
