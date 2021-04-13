<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%stationSubdivision}}`.
 */
class m210405_165719_create_stationSubdivision_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%stationSubdivision}}', [
            'station_id' => $this->primaryKey(),
            'subdivision_id' => $this->primaryKey(),
        ]);

        $this->createIndex(
            'idx-stationSubdivision-station_id',
            'stationSubdivision',
            'station_id'
        );

        $this->addForeignKey(
            'fk-stationSubdivision-station_id',
            'stationSubdivision',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-stationSubdivision-subdivision_id',
            'stationSubdivision',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-stationSubdivision-subdivision_id',
            'stationSubdivision',
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
        $this->dropTable('{{%stationSubdivision}}');
    }
}
