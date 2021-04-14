<?php

use yii\db\Migration;

/**
 * Class m210414_155154_add_relation_for_spr_siz_table
 */
class m210414_155154_add_relation_for_spr_siz_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155154_add_relation_for_spr_siz_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155154_add_relation_for_spr_siz_table cannot be reverted.\n";

        return false;
    }
    */
}
