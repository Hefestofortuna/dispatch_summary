<?php

use yii\db\Migration;

/**
 * Class m210414_155140_add_relation_for_dga_list_table
 */
class m210414_155140_add_relation_for_dga_list_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-dga_list-organization_id',
            'dga_list',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-dga_list-organization_id',
            'dga_list',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155140_add_relation_for_dga_list_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155140_add_relation_for_dga_list_table cannot be reverted.\n";

        return false;
    }
    */
}
