<?php

use yii\db\Migration;

/**
 * Class m210601_033120_add_relation_for_file_table
 */
class m210601_033120_add_relation_for_file_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-file-news_id',
            'file',
            'news_id'
        );

        $this->addForeignKey(
            'fk-file-news_id',
            'file',
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
        echo "m210601_033120_add_relation_for_file_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210601_033120_add_relation_for_file_table cannot be reverted.\n";

        return false;
    }
    */
}
