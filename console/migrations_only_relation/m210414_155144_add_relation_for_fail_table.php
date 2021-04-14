<?php

use yii\db\Migration;

/**
 * Class m210414_155144_add_relation_for_fail_table
 */
class m210414_155144_add_relation_for_fail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-fail-organization_id',
            'fail',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-fail-organization_id',
            'fail',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-fail-fail_user_id',
            'fail',
            'fail_user_id'
        );

        $this->addForeignKey(
            'fk-fail-fail_user_id',
            'fail',
            'finder_user_id',
            'fail_user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-fail-station_id',
            'fail',
            'station_id'
        );

        $this->addForeignKey(
            'fk-fail-station_id',
            'fail',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-fail-user_id',
            'fail',
            'user_id'
        );

        $this->addForeignKey(
            'fk-fail-user_id',
            'fail',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-fail-subdivision_id',
            'fail',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-fail-subdivision_id',
            'fail',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-fail-service_id',
            'fail',
            'service_id'
        );

        $this->addForeignKey(
            'fk-fail-service_id',
            'fail',
            'service_id',
            'service',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155144_add_relation_for_fail_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155144_add_relation_for_fail_table cannot be reverted.\n";

        return false;
    }
    */
}
