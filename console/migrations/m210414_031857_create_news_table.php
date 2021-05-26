<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m210414_031857_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Заголовок'),
            'content' => $this->string()->notNull()->comment('Содержание'),
            'user_id' => $this->integer()->notNull()->comment('Автор'),
            'putdate' => $this->date()->notNull()->comment('Дата публикации'),
            'file_id' => $this->integer()->defaultValue(null)->comment('Файлы'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
