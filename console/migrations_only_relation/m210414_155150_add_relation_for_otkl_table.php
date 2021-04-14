<?php

use yii\db\Migration;

/**
 * Class m210414_155150_add_relation_for_otkl_table
 */
class m210414_155150_add_relation_for_otkl_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-otkl-station_id',
            'otkl',
            'station_id'
        );

        $this->addForeignKey(
            'fk-otkl-station_id',
            'otkl',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-otkl-organization_id',
            'otkl',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-otkl-organization_id',
            'otkl',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-otkl-user_id',
            'otkl',
            'user_id'
        );

        $this->addForeignKey(
            'fk-otkl-user_id',
            'otkl',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-otkl-transfer_user_id',
            'otkl',
            'transfer_user_id'
        );

        $this->addForeignKey(
            'fk-otkl-transfer_user_id',
            'otkl',
            'transfer_user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155150_add_relation_for_otkl_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155150_add_relation_for_otkl_table cannot be reverted.\n";

        return false;
    }
    */
}
