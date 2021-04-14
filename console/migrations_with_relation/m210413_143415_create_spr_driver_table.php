<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spr_driver}}`.
 */
class m210413_143415_create_spr_driver_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spr_driver}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->comment('Пользователь'),
        ]);

        $this->createIndex(
            'idx-spr_driver-user_id',
            'spr_driver',
            'user_id'
        );

        $this->addForeignKey(
            'fk-spr_driver-user_id',
            'spr_driver',
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
        $this->dropTable('{{%spr_driver}}');
    }
}
