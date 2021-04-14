<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spr_class}}`.
 */
class m210413_141821_create_spr_class_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spr_class}}', [
            'id' => $this->primaryKey(),
            'cur' => $this->string()->notNull()->comment('Значение'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%spr_class}}');
    }
}
