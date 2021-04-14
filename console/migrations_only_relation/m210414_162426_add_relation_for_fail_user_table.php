<?php

use yii\db\Migration;

/**
 * Class m210414_162426_add_relation_for_fail_user_table
 */
class m210414_162426_add_relation_for_fail_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-fail_user-user_id',
            'fail_user',
            'user_id'
        );

        $this->addForeignKey(
            'fk-fail_user-user_id',
            'fail_user',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-fail_user-fail_id',
            'fail_user',
            'fail_id'
        );

        $this->addForeignKey(
            'fk-fail_user-fail_id',
            'fail_user',
            'fail_id',
            'fail',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_162426_add_relation_for_fail_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_162426_add_relation_for_fail_user_table cannot be reverted.\n";

        return false;
    }
    */
}
