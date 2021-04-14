<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spr_siz}}`.
 */
class m210413_142040_create_spr_siz_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spr_siz}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Наименование СИЗ'),
            'time' => $this->integer()->notNull()->comment('Периодичность испытания (мес)'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%spr_siz}}');
    }
}
