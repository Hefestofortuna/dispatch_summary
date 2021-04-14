<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%station_subdivision}}`.
 */
class m210405_165719_create_station_subdivision_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%station_subdivision}}', [
            'station_id' => $this->primaryKey()->comment('Станция'),
            'subdivision_id' => $this->primaryKey()->comment('Подразделение'),
        ]);

        $this->createIndex(
            'idx-station_subdivision-station_id',
            'station_subdivision',
            'station_id'
        );

        $this->addForeignKey(
            'fk-station_subdivision-station_id',
            'station_subdivision',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-station_subdivision-subdivision_id',
            'station_subdivision',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-station_subdivision-subdivision_id',
            'station_subdivision',
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
        $this->dropTable('{{%station_subdivision}}');
    }
}
