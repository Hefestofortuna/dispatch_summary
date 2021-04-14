<?php

use yii\db\Migration;

/**
 * Class m210414_155140_add_relation_for_station_table
 */
class m210414_155140_add_relation_for_station_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createIndex(
            'idx-station-organization_id',
            'station',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-station-organization_id',
            'station',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-station-subdivision_id',
            'station',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-station-subdivision_id',
            'station',
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
        echo "m210414_155140_add_relation_for_station_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155140_add_relation_for_station_table cannot be reverted.\n";

        return false;
    }
    */
}
