<?php

use yii\db\Migration;

/**
 * Class m210414_155152_add_relation_for_spr_auto_table
 */
class m210414_155152_add_relation_for_spr_auto_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-spr_auto-organization_id',
            'spr_auto',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-spr_auto-organization_id',
            'spr_auto',
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
        echo "m210414_155152_add_relation_for_spr_auto_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155152_add_relation_for_spr_auto_table cannot be reverted.\n";

        return false;
    }
    */
}
