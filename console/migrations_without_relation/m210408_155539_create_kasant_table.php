<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kasant}}`.
 */
class m210408_155539_create_kasant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kasant}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата'),
            'place' => $this->string()->notNull()->comment('Место'),
            'cause' => $this->string()->notNull()->comment('Причина'),
            'time_start' => $this->time()->notNull()->comment('Время начала'),
            'time_finish' => $this->time()->notNull()->comment('Время окончания'),
            'time_total' => $this->time()->notNull()->comment('Продолжительность'),
            'service' => $this->string()->notNull()->comment('Виновная служба'),
            'resolution' => $this->string()->defaultValue(null)->comment('Резолюция'),
            'count' => $this->integer()->defaultValue(null)->comment('Кол задержанных поезд'),
            'time_delay' => $this->time()->defaultValue(null)->comment('Время задержки проездов'),
            'user_id' => $this->integer()->notNull()->comment('Загрузил'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);
 }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kasant}}');
    }
}
