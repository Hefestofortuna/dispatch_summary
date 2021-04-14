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
            'subdivision_id' => $this->integer()->notNull()->comment('Подразделение'),
            'user_id' => $this->integer()->notNull()->comment('Автор'),
            'character' => $this->string()->notNull()->comment('Характер'),
            'station_id' => $this->integer()->notNull()->comment('Характер'),
            'fail_user_id' => $this->integer()->comment('Кто расследовал'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
            'system' => $this->boolean()->notNull()->defaultValue(true)->comment('КАСАНТ'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%fail}}');
    }
}
