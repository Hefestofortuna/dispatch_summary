<?php

use yii\db\Migration;

/**
 * Class m210414_155148_add_relation_for_ksotp_category_table
 */
class m210414_155148_add_relation_for_ksotp_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-ksotp_category-parent_id',
            'ksotp_category',
            'parent_id'
        );

        $this->addForeignKey(
            'fk-ksotp_category-parent_id',
            'ksotp_category',
            'parent_id',
            'ksotpcategory',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155148_add_relation_for_ksotp_category_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155148_add_relation_for_ksotp_category_table cannot be reverted.\n";

        return false;
    }
    */
}
