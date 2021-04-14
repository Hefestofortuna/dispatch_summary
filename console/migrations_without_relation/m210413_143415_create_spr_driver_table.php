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
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%spr_driver}}');
    }
}
