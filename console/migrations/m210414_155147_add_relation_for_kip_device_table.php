<?php

use yii\db\Migration;

/**
 * Class m210414_155147_add_relation_for_kip_device_table
 */
class m210414_155147_add_relation_for_kip_device_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {


        $this->createIndex(
            'idx-kip_device-station_id',
            'kip_device',
            'station_id'
        );

        $this->addForeignKey(
            'fk-kip_device-station_id',
            'kip_device',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-kip_device-organization_id',
            'kip_device',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-kip_device-organization_id',
            'kip_device',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-kip_device-subdivision_id',
            'kip_device',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-kip_device-subdivision_id',
            'kip_device',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155147_add_relation_for_kip_device_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155147_add_relation_for_kip_device_table cannot be reverted.\n";

        return false;
    }
    */
}
