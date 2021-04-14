<?php

use yii\db\Migration;

/**
 * Class m210414_155153_add_relation_for_service_table
 */
class m210414_155153_add_relation_for_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-service-organization_id',
            'service',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-service-organization_id',
            'service',
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
        echo "m210414_155153_add_relation_for_service_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155153_add_relation_for_service_table cannot be reverted.\n";

        return false;
    }
    */
}
