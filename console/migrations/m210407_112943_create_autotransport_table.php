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
            'organization_id' => $this->boolean()->notNull()->comment('Согласовано'),
        ]);

        $this->createIndex(
            'idx-autotransport-organization_id',
            'autotransport',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-autotransport-organization_id',
            'autotransport',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-autotransport-subdivision_id',
            'autotransport',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-autotransport-subdivision_id',
            'autotransport',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-autotransport-contact_user_id',
            'autotransport',
            'contact_user_id'
        );

        $this->addForeignKey(
            'fk-autotransport-contact_user_id',
            'autotransport',
            'contact_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-autotransport-user_id',
            'autotransport',
            'user_id'
        );

        $this->addForeignKey(
            'fk-autotransport-user_id',
            'autotransport',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-autotransport-auto_id',
            'autotransport',
            'auto_id'
        );

        $this->addForeignKey(
            'fk-autotransport-auto_id',
            'autotransport',
            'auto_id',
            'spr_auto',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-autotransport-driver_user_id',
            'autotransport',
            'driver_user_id'
        );

        $this->addForeignKey(
            'fk-autotransport-driver_user_id',
            'autotransport',
            'driver_user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%autotransport}}');
    }
}
