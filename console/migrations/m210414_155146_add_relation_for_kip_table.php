<?php

use yii\db\Migration;

/**
 * Class m210414_155146_add_relation_for_kip_table
 */
class m210414_155146_add_relation_for_kip_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-kip-station_id',
            'kip',
            'station_id'
        );

        $this->addForeignKey(
            'fk-kip-station_id',
            'kip',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-kip-user_id',
            'kip',
            'user_id'
        );

        $this->addForeignKey(
            'fk-kip-user_id',
            'kip',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-kip-organization_id',
            'kip',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-kip-organization_id',
            'kip',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-kip-subdivision_id',
            'kip',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-kip-subdivision_id',
            'kip',
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
        echo "m210414_155146_add_relation_for_kip_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155146_add_relation_for_kip_table cannot be reverted.\n";

        return false;
    }
    */
}
