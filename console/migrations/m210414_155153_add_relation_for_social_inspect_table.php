<?php

use yii\db\Migration;

/**
 * Class m210414_155153_add_relation_for_social_inspect_table
 */
class m210414_155153_add_relation_for_social_inspect_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-social_inspect-station_id',
            'social_inspect',
            'station_id'
        );

        $this->addForeignKey(
            'fk-social_inspect-station_id',
            'social_inspect',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-social_inspect-service_id',
            'social_inspect',
            'service_id'
        );

        $this->addForeignKey(
            'fk-social_inspect-service_id',
            'social_inspect',
            'service_id',
            'service',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-social_inspect-user_id',
            'social_inspect',
            'user_id'
        );

        $this->addForeignKey(
            'fk-social_inspect-user_id',
            'social_inspect',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-social_inspect-organization_id',
            'social_inspect',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-social_inspect-organization_id',
            'social_inspect',
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
        echo "m210414_155153_add_relation_for_social_inspect_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155153_add_relation_for_social_inspect_table cannot be reverted.\n";

        return false;
    }
    */
}
