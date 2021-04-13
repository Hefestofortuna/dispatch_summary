<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%windowapplication}}`.
 */
class m210407_065154_create_windowapplication_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%windowapplication}}', [
            'id' => $this->primaryKey(),
            'dnc' => $this->string(),
            'date' => $this->dateTime()->notNull(),
            'station_id' => $this->integer()->notNull(),
            'type' => $this->string()->notNull(),
            'way' => $this->integer()->notNull(),
            'km' => $this->integer()->notNull(),
            'picket' => $this->integer()->notNull(),
            'shutdown' => $this->boolean()->notNull(),
            'fio_main' => $this->string()->notNull(),
            'fio_bd' => $this->string()->notNull(),
            'representative' => $this->boolean()->notNull(),
            'sign' => $this->boolean()->notNull(),
            'shutdown_voltage' => $this->boolean()->notNull(),
            'description' => $this->string(),
            'fio_shchd' => $this->string(),
            'written' => $this->boolean()->notNull(),
        ]);

        $this->createIndex(
            'idx-windowapplication-station_id',
            'window',
            'station_id'
        );

        $this->addForeignKey(
            'fk-windowapplication-station_id',
            'windowapplication',
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
        $this->dropTable('{{%windowapplication}}');
    }
}
