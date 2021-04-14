<?php

use yii\db\Migration;

/**
 * Class m210414_155151_add_relation_for_contractor_reestr_table
 */
class m210414_155151_add_relation_for_contractor_reestr_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex(
            'idx-contractor_reestr-station_id',
            'contractor_reestr',
            'station_id'
        );

        $this->addForeignKey(
            'fk-contractor_reestr-station_id',
            'contractor_reestr',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-contractor_reestr-organization_id',
            'contractor_reestr',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-contractor_reestr-organization_id',
            'contractor_reestr',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-contractor_reestr-contractor_id',
            'contractor_reestr',
            'contractor_id'
        );

        $this->addForeignKey(
            'fk-contractor_reestr-contractor_id',
            'contractor_reestr',
            'contractor_id',
            'contractor',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210414_155151_add_relation_for_contractor_reestr_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210414_155151_add_relation_for_contractor_reestr_table cannot be reverted.\n";

        return false;
    }
    */
}
