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
            'title' => $this->string()->notNull()->comment('Станция'),
            'subdivision_id' => $this->integer()->notNull()->comment('Подразделение'),
            'dga_id' => $this->integer()->notNull()->comment('ДГА'),
            'stType' => $this->boolean()->notNull()->comment('Станция/Перегон'),
            'organization_id' => $this->boolean()->notNull()->comment('Предприятие'),
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
