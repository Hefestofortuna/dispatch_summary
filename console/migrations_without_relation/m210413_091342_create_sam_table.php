<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sam}}`.
 */
class m210413_091342_create_sam_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sam}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата замечания'),
            'time_start' => $this->time()->defaultValue('00:00:00')->notNull()->comment('Время начала'),
            'time_finish' => $this->time()->defaultValue(null)->comment('Время окончания'),
            'sam_from_id' => $this->integer()->notNull()->comment('Кто сделал'),
            'subdivision_id' => $this->integer()->notNull()->comment('Подразделение'),
            'station_id' => $this->integer()->notNull()->comment('Станция/Перегон'),
            'responsible_user_id' => $this->integer()->defaultValue(null)->comment('Отвественный'),
            'reason' => $this->string()->defaultValue(null)->comment('Причина'),
            'description' => $this->string()->defaultValue(null)->comment('Примечание'),
            'status' => $this->boolean()->notNull()->defaultValue(false)->comment('Устранено'),
            'user_id' => $this->integer()->notNull()->comment('Пользователь'),
            'title_object' => $this->string()->defaultValue(null)->comment('Объект'),
            'sam_category_id' => $this->integer()->notNull()->comment('Категория неисправности'),
            'level' => $this->integer()->notNull()->defaultValue('0')->comment('Категория неисправности'),
            'putdate_send' => $this->date()->defaultValue(null)->comment('Дата сообщения электромеханику'),
            'time_send' => $this->time()->defaultValue(null)->comment('Время сообщения электромеханику'),
            'date_finish' => $this->date()->defaultValue(null)->comment('Дата завершения'),
            'organization_id' => $this->integer()->notNull()->comment('Препдприятие'),
            'putdate_term' => $this->date()->defaultValue(null)->comment('Срок устранения'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sam}}');
    }
}
