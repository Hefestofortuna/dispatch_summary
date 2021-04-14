<?php

use yii\db\Migration;

/**
 * Class m210414_155141_add_relation_for_dga_table
 */
class m210414_155141_add_relation_for_dga_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-dga-organization_id',
            'dga',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-dga-organization_id',
            'dga',
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
        echo "m210414_155141_add_relation_for_dga_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155141_add_relation_for_dga_table cannot be reverted.\n";

        return false;
    }
    */
}
