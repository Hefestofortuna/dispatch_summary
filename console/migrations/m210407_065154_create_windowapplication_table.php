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
            'dnc' => $this->string()->comment('ДНЦ'),
            'date' => $this->dateTime()->notNull()->comment('Дата и время'),
            'station_id' => $this->integer()->notNull()->comment('Станция/Перегон'),
            'type' => $this->string()->notNull()->comment('Работа'),
            'way' => $this->integer()->notNull()->comment('Путь'),
            'km' => $this->integer()->notNull()->comment('Километр'),
            'picket' => $this->integer()->notNull()->comment('Пикет'),
            'shutdown' => $this->boolean()->notNull()->comment('Выключение устройств'),
            'fio_main' => $this->string()->notNull()->comment('ФИО руководителя работ'),
            'fio_bd' => $this->string()->notNull()->comment('ФИО отвественного за БД'),
            'representative' => $this->boolean()->notNull()->comment('Требуется ли представитель'),
            'sign' => $this->boolean()->notNull()->comment('С окном|Без окна'),
            'shutdown_voltage' => $this->boolean()->notNull()->comment('Снятие напряжения'),
            'description' => $this->string()->comment('Примечание'),
            'fio_shchd' => $this->string()->comment('ФИО ШЧД'),
            'written' => $this->boolean()->notNull()->comment('Записан'),
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
