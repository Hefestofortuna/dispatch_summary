<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%autotransport}}`.
 */
class m210407_112943_create_autotransport_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%autotransport}}', [
            'id' => $this->primaryKey(),
            'date' => $this->date()->notNull()->comment('Дата'),
            'subdivision_id' => $this->integer()->comment('Подразделение'),
            'target' => $this->string()->notNull()->comment('Цель поездки'),
            'contact_user_id' => $this->integer()->notNull()->comment('Кому'),
            'user_id' => $this->integer()->notNull()->comment('Пользователь'),
            'auto_id' => $this->integer()->comment('Автотранспорт'),
            'driver_user_id' => $this->integer()->comment('Водитель'),
            'time_arrival' => $this->time()->comment('Время прибытия'),
            'time_departure' => $this->time()->comment('Время отправления'),
            'odometr' => $this->integer()->comment('Время отправления'),
            'status' => $this->boolean()->notNull()->comment('Одометр'),
            'organization_id' => $this->integer()->notNull()->comment('Согласовано'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%autotransport}}');
    }
}
