<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sam_category}}`.
 */
class m210413_113935_create_sam_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sam_category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Название категории'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sam_category}}');
    }
}
