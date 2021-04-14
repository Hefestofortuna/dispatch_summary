<?php

use yii\db\Migration;

/**
 * Class m210414_155143_add_relation_for_document_table
 */
class m210414_155143_add_relation_for_document_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-document-user_id',
            'document',
            'user_id'
        );

        $this->addForeignKey(
            'fk-document-user_id',
            'document',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-document-category_id',
            'document',
            'category_id'
        );

        $this->addForeignKey(
            'fk-document-category_id',
            'document',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-document-otdel_id',
            'document',
            'otdel_id'
        );

        $this->addForeignKey(
            'fk-document-otdel_id',
            'document',
            'otdel_id',
            'otdel',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155143_add_relation_for_document_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155143_add_relation_for_document_table cannot be reverted.\n";

        return false;
    }
    */
}
