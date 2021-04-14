<?php

use yii\db\Migration;

/**
 * Class m210414_155143_add_relation_for_briefing_table
 */
class m210414_155143_add_relation_for_briefing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-briefing-instructor_user_id',
            'briefing',
            'instructor_user_id'
        );

        $this->addForeignKey(
            'fk-briefing-instructor_user_id',
            'briefing',
            'instructor_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-briefing-employee_user_id',
            'briefing',
            'employee_user_id'
        );

        $this->addForeignKey(
            'fk-briefing-employee_user_id',
            'briefing',
            'employee_user_id',
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
        echo "m210414_155143_add_relation_for_briefing_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155143_add_relation_for_briefing_table cannot be reverted.\n";

        return false;
    }
    */
}
