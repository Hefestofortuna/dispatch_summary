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
            'station_id' => $this->integer()->comment('Станция'),
            'subdivision_id' => $this->integer()->comment('Подразделение'),
            'PRIMARY KEY(station_id, subdivision_id)',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%station_subdivision}}');
    }
}
