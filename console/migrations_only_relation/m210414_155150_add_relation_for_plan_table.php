<?php

use yii\db\Migration;

/**
 * Class m210414_155150_add_relation_for_plan_table
 */
class m210414_155150_add_relation_for_plan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-plan-organization_id',
            'plan',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-plan-organization_id',
            'plan',
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
        echo "m210414_155150_add_relation_for_plan_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155150_add_relation_for_plan_table cannot be reverted.\n";

        return false;
    }
    */
}
