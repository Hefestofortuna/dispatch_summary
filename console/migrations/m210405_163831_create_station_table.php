<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%station}}`.
 */
class m210405_163831_create_station_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%station}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'subdivision_id' => $this->integer()->notNull(),
            'dga_id' => $this->integer()->notNull(),
            'stType' => $this->boolean()->notNull(),
            'organization_id' => $this->boolean()->notNull(),
        ]);

        $this->createIndex(
            'idx-station-organization_id',
            'dga',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-station-organization_id',
            'dga',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-station-subdivision_id',
            'dga',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-station-subdivision_id',
            'dga',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%station}}');
    }
}
