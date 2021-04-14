<?php

use yii\db\Migration;

/**
 * Class m210414_155143_add_relation_for_contact_table
 */
class m210414_155143_add_relation_for_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-contact-organization_id',
            'contact',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-contact-organization_id',
            'contact',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-contact-user_id',
            'contact',
            'user_id'
        );

        $this->addForeignKey(
            'fk-contact-user_id',
            'contact',
            'user_id',
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
        echo "m210414_155143_add_relation_for_contact_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155143_add_relation_for_contact_table cannot be reverted.\n";

        return false;
    }
    */
}
