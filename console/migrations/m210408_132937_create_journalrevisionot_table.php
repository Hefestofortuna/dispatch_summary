<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journalrevisionot}}`.
 */
class m210408_132937_create_journalrevisionot_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journalrevisionot}}', [
            'id' => $this->primaryKey(),
            'date_create' => $this->date()->notNull()->comment('Дата назначения'),
            'station_id' => $this->integer()->notNull()->comment('Станция/перегон'),
            'subdivision_id' => $this->integer()->notNull()->comment('Подразделение'),
            'date_rev' => $this->date()->defaultValue(null)->comment('Дата проверки'),
            'date_time' => $this->date()->defaultValue(null)->comment('Срок устранения'),
            'date_finish' => $this->date()->defaultValue(null)->comment('Дата завершения'),
            'status' => $this->boolean()->defaultValue(false)->notNull()->comment('Устранено'),
            'revisor' => $this->integer()->notNull()->comment('Устранено'),
            'type' => $this->integer()->notNull()->comment('Заголовок'),
            'upload' => $this->boolean()->defaultValue(false)->notNull()->comment('Отчет'),
            'result' => $this->integer()->defaultValue('0')->notNull()->comment('Оценка'),
            'rev_user_id' => $this->integer()->defaultValue(null)->notNull()->comment('Оценка'),
            'first_kom_user_id' => $this->integer()->defaultValue(null)->comment('ФИО членов комиссии №1'),
            'second_kom_user_id' => $this->integer()->defaultValue(null)->comment('ФИО членов комиссии №2'),
            'time_rev' => $this->time()->defaultValue(null)->comment('Время проверки'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);

        $this->createIndex(
            'idx-journalrevisionot-organization_id',
            'journalrevisionot',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-journalrevisionot-organization_id',
            'journalrevisionot',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journalrevisionot-second_kom_user_id',
            'journalrevisionot',
            'first_kom_user_id'
        );

        $this->addForeignKey(
            'fk-journalrevisionot-second_kom_user_id',
            'journalrevisionot',
            'second_kom_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journalrevisionot-first_kom_user_id',
            'journalrevisionot',
            'first_kom_user_id'
        );

        $this->addForeignKey(
            'fk-journalrevisionot-first_kom_user_id',
            'journalrevisionot',
            'first_kom_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journalrevisionot-subdivision_id',
            'journalrevisionot',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-journalrevisionot-subdivision_id',
            'journalrevisionot',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journalrevisionot-station_id',
            'journalrevisionot',
            'station_id'
        );

        $this->addForeignKey(
            'fk-journalrevisionot-station_id',
            'journalrevisionot',
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
        $this->dropTable('{{%journalrevisionot}}');
    }
}
