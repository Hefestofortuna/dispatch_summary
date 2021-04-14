<?php

use yii\db\Migration;

/**
 * Class m210414_155148_add_relation_for_msu_table
 */
class m210414_155148_add_relation_for_msu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-msu-user_id',
            'msu',
            'user_id'
        );

        $this->addForeignKey(
            'fk-msu-user_id',
            'msu',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-msu-subdivision_id',
            'msu',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-msu-subdivision_id',
            'msu',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-msu-station_id',
            'msu',
            'station_id'
        );

        $this->addForeignKey(
            'fk-msu-station_id',
            'msu',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-msu-organization_id',
            'msu',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-msu-organization_id',
            'msu',
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
        echo "m210414_155148_add_relation_for_msu_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155148_add_relation_for_msu_table cannot be reverted.\n";

        return false;
    }
    */
}
