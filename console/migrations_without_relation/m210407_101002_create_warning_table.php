<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%warning}}`.
 */
class m210407_101002_create_warning_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%warning}}', [
            'id' => $this->primaryKey(),
            'station_id' => $this->integer()->notNull()->comment('Станция/перегон'),
            'place' => $this->string()->notNull()->comment('Место работ (№ пути, км, пк)'),
            'description' => $this->string()->notNull()->comment('Описание'),
            'date_work' => $this->date()->notNull()->comment('Дата выполнения работ'),
            'time_from' => $this->time()->notNull()->comment('Время с (мск)'),
            'time_to' => $this->time()->notNull()->comment('Время по (мск)'),
            'date_arm' => $this->date()->comment('Внесено в АРМ ЛП'),
            'user_id' => $this->integer()->notNull()->comment('Пользователь'),
            'time_arm' => $this->time()->notNull()->comment('Время внесения (мск)'),
            'arm_user_id' => $this->integer()->comment('Передал в АРМ ЛП'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
            'pub_date' => $this->dateTime()->comment('Дата создания'),
            'number' => $this->string()->comment('Номер пр-ния'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%warning}}');
    }
}
