<?php

use yii\db\Migration;

/**
 * Class m210414_155152_add_relation_for_sam_table
 */
class m210414_155152_add_relation_for_sam_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-sam-sam_from_id',
            'sam',
            'sam_from_id'
        );

        $this->addForeignKey(
            'fk-sam-sam_from_id',
            'sam',
            'sam_from_id',
            'sam_from',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-sam-subdivision_id',
            'sam',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-sam-subdivision_id',
            'sam',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-sam-responsible_user_id',
            'sam',
            'responsible_user_id'
        );

        $this->addForeignKey(
            'fk-sam-responsible_user_id',
            'sam',
            'responsible_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-sam-user_id',
            'sam',
            'user_id'
        );

        $this->addForeignKey(
            'fk-sam-user_id',
            'sam',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-sam-sam_category_id',
            'sam',
            'sam_category_id'
        );

        $this->addForeignKey(
            'fk-sam-sam_category_id',
            'sam',
            'sam_category_id',
            'sam_category',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-sam-organization_id',
            'sam',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-sam-organization_id',
            'sam',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-sam-station_id',
            'sam',
            'station_id'
        );

        $this->addForeignKey(
            'fk-sam-station_id',
            'sam',
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
        echo "m210414_155152_add_relation_for_sam_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155152_add_relation_for_sam_table cannot be reverted.\n";

        return false;
    }
    */
}
