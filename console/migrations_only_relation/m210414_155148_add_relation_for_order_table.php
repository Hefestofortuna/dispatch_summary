<?php

use yii\db\Migration;

/**
 * Class m210414_155148_add_relation_for_order_table
 */
class m210414_155148_add_relation_for_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-order-shchd_on_user_id',
            'order',
            'shchd_on_user_id'
        );

        $this->addForeignKey(
            'fk-order-shchd_on_user_id',
            'order',
            'shchd_on_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-shns_on_user_id',
            'order',
            'shns_on_user_id'
        );

        $this->addForeignKey(
            'fk-order-shns_on_user_id',
            'order',
            'shns_on_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-apply_shch_user_id',
            'order',
            'apply_shch_user_id'
        );

        $this->addForeignKey(
            'fk-order-apply_shch_user_id',
            'order',
            'apply_shch_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-shchd_off_user_id',
            'order',
            'shchd_off_user_id'
        );

        $this->addForeignKey(
            'fk-order-shchd_off_user_id',
            'order',
            'shchd_off_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-shns_off_user_id',
            'order',
            'shns_off_user_id'
        );

        $this->addForeignKey(
            'fk-order-shns_off_user_id',
            'order',
            'shns_off_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-card_id',
            'order',
            'card_id'
        );

        $this->addForeignKey(
            'fk-order-card_id',
            'order',
            'card_id',
            'card',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-organization_id',
            'order',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-order-organization_id',
            'order',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-station_id',
            'order',
            'station_id'
        );

        $this->addForeignKey(
            'fk-order-station_id',
            'order',
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
        echo "m210414_155148_add_relation_for_order_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155148_add_relation_for_order_table cannot be reverted.\n";

        return false;
    }
    */
}
