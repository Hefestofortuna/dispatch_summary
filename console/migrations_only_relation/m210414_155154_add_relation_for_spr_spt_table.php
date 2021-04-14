<?php

use yii\db\Migration;

/**
 * Class m210414_155154_add_relation_for_spr_spt_table
 */
class m210414_155154_add_relation_for_spr_spt_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-spr_spt-spr_class_id',
            'spr_spt',
            'spr_class_id'
        );

        $this->addForeignKey(
            'fk-spr_spt-spr_class_id',
            'spr_spt',
            'spr_class_id',
            'spr_class',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_spt-spr_balance_id',
            'spr_spt',
            'spr_balance_id'
        );

        $this->addForeignKey(
            'fk-spr_spt-spr_balance_id',
            'spr_spt',
            'spr_balance_id',
            'spr_balance',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_spt-spr_spt_type_id',
            'spr_spt',
            'spr_spt_type_id'
        );

        $this->addForeignKey(
            'fk-spr_spt-spr_spt_type_id',
            'spr_spt',
            'spr_spt_type_id',
            'spr_spt_type',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_spt-spr_spt_system_id',
            'spr_spt',
            'spr_spt_system_id'
        );

        $this->addForeignKey(
            'fk-spr_spt-spr_spt_system_id',
            'spr_spt',
            'spr_spt_system_id',
            'spr_spt_system',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_spt-station_id',
            'spr_spt',
            'station_id'
        );

        $this->addForeignKey(
            'fk-spr_spt-station_id',
            'spr_spt',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155154_add_relation_for_spr_spt_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155154_add_relation_for_spr_spt_table cannot be reverted.\n";

        return false;
    }
    */
}
