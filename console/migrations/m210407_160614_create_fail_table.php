<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%fail}}`.
 */
class m210407_160614_create_fail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%fail}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата'),
            'date_start' => $this->date()->notNull()->comment('Дата начала'),
            'time_start' => $this->time()->notNull()->defaultValue('00:00:00')->comment('Время начала'),
            'date_finish' => $this->date()->notNull()->comment('Дата окончания'),
            'time_finish' => $this->time()->notNull()->defaultValue('00:00:00')->comment('Время окончания'),
            'service_id' => $this->integer()->notNull()->comment('Служба'),
            'description' => $this->string()->notNull()->comment('Причина'),
            'subdivision_id' => $this->integer()->notNull()->comment('Цех'),
            'user_id' => $this->integer()->notNull()->comment('Автор'),
            'character' => $this->string()->notNull()->comment('Характер'),
            'station_id' => $this->integer()->notNull()->comment('Характер'),
            'finder_user_id' => $this->string()->comment('Кто расследовал'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
            'system' => $this->boolean()->notNull()->defaultValue(true)->comment('КАСАНТ'),
        ]);

        $this->createIndex(
            'idx-fail-organization_id',
            'fail',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-fail-organization_id',
            'fail',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-fail-finder_user_id',
            'fail',
            'finder_user_id'
        );

        $this->addForeignKey(
            'fk-fail-finder_user_id',
            'fail',
            'finder_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-fail-station_id',
            'fail',
            'station_id'
        );

        $this->addForeignKey(
            'fk-fail-station_id',
            'fail',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-fail-user_id',
            'fail',
            'user_id'
        );

        $this->addForeignKey(
            'fk-fail-user_id',
            'fail',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-fail-subdivision_id',
            'fail',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-fail-subdivision_id',
            'fail',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-fail-service_id',
            'fail',
            'service_id'
        );

        $this->addForeignKey(
            'fk-fail-service_id',
            'fail',
            'service_id',
            'service',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%fail}}');
    }
}
