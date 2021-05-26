<?php

use yii\db\Migration;

/**
 * Class m210521_162318_add_relation_for_file_news_table
 */
class m210521_162318_add_relation_for_file_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-file_news-file_id',
            'file_news',
            'file_id'
        );

        $this->addForeignKey(
            'fk-file_news-file_id',
            'file_news',
            'file_id',
            'file',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-file_news-news_id',
            'file_news',
            'news_id'
        );

        $this->addForeignKey(
            'fk-file_news-news_id',
            'file_news',
            'news_id',
            'news',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210521_162318_add_relation_for_file_news_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210521_162318_add_relation_for_file_news_table cannot be reverted.\n";

        return false;
    }
    */
}
