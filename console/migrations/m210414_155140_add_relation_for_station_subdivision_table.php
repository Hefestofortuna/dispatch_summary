<?php

use yii\db\Migration;

/**
 * Class m210414_155140_add_relation_for_station_subdivision_table
 */
class m210414_155140_add_relation_for_station_subdivision_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-station_subdivision-station_id',
            'station_subdivision',
            'station_id'
        );

        $this->addForeignKey(
            'fk-station_subdivision-station_id',
            'station_subdivision',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-station_subdivision-subdivision_id',
            'station_subdivision',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-station_subdivision-subdivision_id',
            'station_subdivision',
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
        echo "m210414_155140_add_relation_for_station_subdivision_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155140_add_relation_for_station_subdivision_table cannot be reverted.\n";

        return false;
    }
    */
}
