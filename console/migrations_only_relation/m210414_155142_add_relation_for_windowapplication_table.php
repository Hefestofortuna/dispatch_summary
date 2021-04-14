<?php

use yii\db\Migration;

/**
 * Class m210414_155142_add_relation_for_windowapplication_table
 */
class m210414_155142_add_relation_for_windowapplication_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createIndex(
            'idx-windowapplication-station_id',
            'windowapplication',
            'station_id'
        );

        $this->addForeignKey(
            'fk-windowapplication-station_id',
            'windowapplication',
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
        echo "m210414_155142_add_relation_for_windowapplication_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155142_add_relation_for_windowapplication_table cannot be reverted.\n";

        return false;
    }
    */
}
