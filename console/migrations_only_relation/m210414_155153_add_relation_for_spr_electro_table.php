<?php

use yii\db\Migration;

/**
 * Class m210414_155153_add_relation_for_spr_electro_table
 */
class m210414_155153_add_relation_for_spr_electro_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-spr_electro-subdivision_id',
            'spr_electro',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-spr_electro-subdivision_id',
            'spr_electro',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_electro-spr_electro_type_id',
            'spr_electro',
            'spr_electro_type_id'
        );

        $this->addForeignKey(
            'fk-spr_electro-spr_electro_type_id',
            'spr_electro',
            'spr_electro_type_id',
            'spr_electro_type',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_electro-spr_electro_obj_id',
            'spr_electro',
            'spr_electro_obj_id'
        );

        $this->addForeignKey(
            'fk-spr_electro-spr_electro_obj_id',
            'spr_electro',
            'spr_electro_obj_id',
            'spr_electro_obj',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_electro-spr_electro_trans_id',
            'spr_electro',
            'spr_electro_trans_id'
        );

        $this->addForeignKey(
            'fk-spr_electro-spr_electro_trans_id',
            'spr_electro',
            'spr_electro_trans_id',
            'spr_electro_trans',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_electro-organization_id',
            'spr_electro',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-spr_electro-organization_id',
            'spr_electro',
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
        echo "m210414_155153_add_relation_for_spr_electro_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155153_add_relation_for_spr_electro_table cannot be reverted.\n";

        return false;
    }
    */
}
