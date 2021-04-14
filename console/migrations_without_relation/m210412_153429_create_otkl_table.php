<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%otkl}}`.
 */
class m210412_153429_create_otkl_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%otkl}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата отключения'),
            'time_from' => $this->time()->notNull()->defaultValue('00:00:00')->comment('Время с'),
            'time_to' => $this->time()->notNull()->defaultValue('00:00:00')->comment('Время по'),
            'station_id' => $this->integer()->notNull()->comment('Станция/Перегон'),
            'description' => $this->string()->notNull()->comment('Описание'),
            'object' => $this->string()->notNull()->comment('Что отключается'),
            'transfer_user_id' => $this->integer()->defaultValue('0')->notNull()->comment('Передано'),
            'user_id' => $this->integer()->defaultValue('0')->notNull()->comment('Пользователь'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%otkl}}');
    }
}
