<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spr_spt_type}}`.
 */
class m210413_143326_create_spr_spt_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spr_spt_type}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->comment('Тип'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%spr_spt_type}}');
    }
}
