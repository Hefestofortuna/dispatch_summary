<?php

use yii\db\Migration;

/**
 * Class m210414_155153_add_relation_for_spr_electro_obj_table
 */
class m210414_155153_add_relation_for_spr_electro_obj_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-spr_electro_obj-organization_id',
            'spr_electro_obj',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-spr_electro_obj-organization_id',
            'spr_electro_obj',
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
        echo "m210414_155153_add_relation_for_spr_electro_obj_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155153_add_relation_for_spr_electro_obj_table cannot be reverted.\n";

        return false;
    }
    */
}
