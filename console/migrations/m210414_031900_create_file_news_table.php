<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%file_news}}`.
 */
class m210414_031900_create_file_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%file_news}}', [
            'id' => $this->primaryKey(),
            'file_id' => $this->integer()->notNull(),
            'news_id' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%file_news}}');
    }
}
