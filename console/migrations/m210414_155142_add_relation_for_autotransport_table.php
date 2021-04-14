<?php

use yii\db\Migration;

/**
 * Class m210414_155142_add_relation_for_autotransport_table
 */
class m210414_155142_add_relation_for_autotransport_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-autotransport-organization_id',
            'autotransport',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-autotransport-organization_id',
            'autotransport',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-autotransport-subdivision_id',
            'autotransport',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-autotransport-subdivision_id',
            'autotransport',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-autotransport-contact_user_id',
            'autotransport',
            'contact_user_id'
        );

        $this->addForeignKey(
            'fk-autotransport-contact_user_id',
            'autotransport',
            'contact_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-autotransport-user_id',
            'autotransport',
            'user_id'
        );

        $this->addForeignKey(
            'fk-autotransport-user_id',
            'autotransport',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-autotransport-auto_id',
            'autotransport',
            'auto_id'
        );

        $this->addForeignKey(
            'fk-autotransport-auto_id',
            'autotransport',
            'auto_id',
            'spr_auto',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-autotransport-driver_user_id',
            'autotransport',
            'driver_user_id'
        );

        $this->addForeignKey(
            'fk-autotransport-driver_user_id',
            'autotransport',
            'driver_user_id',
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
        echo "m210414_155142_add_relation_for_autotransport_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155142_add_relation_for_autotransport_table cannot be reverted.\n";

        return false;
    }
    */
}
