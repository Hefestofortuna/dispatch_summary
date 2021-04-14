<?php

use yii\db\Migration;

/**
 * Class m210414_155150_add_relation_for_ors_table
 */
class m210414_155150_add_relation_for_ors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-ors-subdivision_id',
            'ors',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-ors-subdivision_id',
            'ors',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-ors-station_id',
            'ors',
            'station_id'
        );

        $this->addForeignKey(
            'fk-ors-station_id',
            'ors',
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
        echo "m210414_155150_add_relation_for_ors_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155150_add_relation_for_ors_table cannot be reverted.\n";

        return false;
    }
    */
}
