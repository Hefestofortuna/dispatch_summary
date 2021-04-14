<?php

use yii\db\Migration;

/**
 * Class m210414_155141_add_relation_for_warning_table
 */
class m210414_155141_add_relation_for_warning_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-warning-station_id',
            'warning',
            'station_id'
        );

        $this->addForeignKey(
            'fk-warning-station_id',
            'warning',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-warning-user_id',
            'warning',
            'user_id'
        );

        $this->addForeignKey(
            'fk-warning-user_id',
            'warning',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-warning-arm_user_id',
            'warning',
            'arm_user_id'
        );

        $this->addForeignKey(
            'fk-warning-arm_user_id',
            'warning',
            'arm_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-warning-organization_id',
            'warning',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-warning-organization_id',
            'warning',
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
        echo "m210414_155141_add_relation_for_warning_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155141_add_relation_for_warning_table cannot be reverted.\n";

        return false;
    }
    */
}
