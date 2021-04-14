<?php

use yii\db\Migration;

/**
 * Class m210414_155143_add_relation_for_category_table
 */
class m210414_155143_add_relation_for_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-category-organization_id',
            'category',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-category-organization_id',
            'category',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-category-otdel_id',
            'category',
            'otdel_id'
        );

        $this->addForeignKey(
            'fk-category-otdel_id',
            'category',
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
        echo "m210414_155143_add_relation_for_category_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155143_add_relation_for_category_table cannot be reverted.\n";

        return false;
    }
    */
}
