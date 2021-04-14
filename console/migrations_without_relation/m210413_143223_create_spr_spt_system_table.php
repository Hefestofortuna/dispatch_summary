<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spr_spt_system}}`.
 */
class m210413_143223_create_spr_spt_system_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spr_spt_system}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->comment('Наименование'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%spr_spt_system}}');
    }
}
