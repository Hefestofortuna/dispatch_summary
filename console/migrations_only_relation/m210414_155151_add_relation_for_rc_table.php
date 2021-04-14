<?php

use yii\db\Migration;

/**
 * Class m210414_155151_add_relation_for_rc_table
 */
class m210414_155151_add_relation_for_rc_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-rc-station_id',
            'rc',
            'station_id'
        );

        $this->addForeignKey(
            'fk-rc-station_id',
            'rc',
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
        echo "m210414_155151_add_relation_for_rc_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155151_add_relation_for_rc_table cannot be reverted.\n";

        return false;
    }
    */
}
