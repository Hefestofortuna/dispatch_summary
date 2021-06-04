<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news_user}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%news}}`
 * - `{{%user}}`
 */
class m210414_031859_create_junction_table_for_news_and_user_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news_user}}', [
            'news_id' => $this->integer()->comment('Новость'),
            'user_id' => $this->integer()->comment('Пользователь'),
            'PRIMARY KEY(news_id, user_id)',
        ]);

        // creates index for column `news_id`
        $this->createIndex(
            '{{%idx-news_user-news_id}}',
            '{{%news_user}}',
            'news_id'
        );

        // add foreign key for table `{{%news}}`
        $this->addForeignKey(
            '{{%fk-news_user-news_id}}',
            '{{%news_user}}',
            'news_id',
            '{{%news}}',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-news_user-user_id}}',
            '{{%news_user}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-news_user-user_id}}',
            '{{%news_user}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%news}}`
        $this->dropForeignKey(
            '{{%fk-news_user-news_id}}',
            '{{%news_user}}'
        );

        // drops index for column `news_id`
        $this->dropIndex(
            '{{%idx-news_user-news_id}}',
            '{{%news_user}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-news_user-user_id}}',
            '{{%news_user}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-news_user-user_id}}',
            '{{%news_user}}'
        );

        $this->dropTable('{{%news_user}}');
    }
}
