<?php

use yii\db\Migration;

/**
 * Class m210519_085057_add_relation_for_news_table
 */
class m210519_085057_add_relation_for_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-news-user_id',
            'news',
            'user_id'
        );

        $this->addForeignKey(
            'fk-news-user_id',
            'news',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210519_085057_add_relation_for_news_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210519_085057_add_relation_for_news_table cannot be reverted.\n";

        return false;
    }
    */
}
