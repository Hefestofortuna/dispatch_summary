<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%file}}`.
 */
class m210414_031858_create_file_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%file}}', [
            'id' => $this->primaryKey(),
            'news_id' =>$this->integer()->notNull()->comment('Новость'),
            'filename' =>$this->text()->notNull()->comment('Имя файла'),
            'filepath' =>$this->text()->notNull()->comment('Путь до файла'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%file}}');
    }
}
