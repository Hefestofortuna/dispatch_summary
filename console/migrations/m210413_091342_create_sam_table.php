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

        $this->createIndex(
            'idx-sam-sam_from_id',
            'sam',
            'sam_from_id'
        );

        $this->addForeignKey(
            'fk-sam-sam_from_id',
            'sam',
            'sam_from_id',
            'sam_from',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-sam-subdivision_id',
            'sam',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-sam-subdivision_id',
            'sam',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-sam-responsible_user_id',
            'sam',
            'responsible_user_id'
        );

        $this->addForeignKey(
            'fk-sam-responsible_user_id',
            'sam',
            'responsible_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-sam-user_id',
            'sam',
            'user_id'
        );

        $this->addForeignKey(
            'fk-sam-user_id',
            'sam',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-sam-sam_category_id',
            'sam',
            'sam_category_id'
        );

        $this->addForeignKey(
            'fk-sam-sam_category_id',
            'sam',
            'sam_category_id',
            'sam_category',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-sam-organization_id',
            'sam',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-sam-organization_id',
            'sam',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-sam-station_id',
            'sam',
            'station_id'
        );

        $this->addForeignKey(
            'fk-sam-station_id',
            'sam',
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
        $this->dropTable('{{%sam}}');
    }
}
