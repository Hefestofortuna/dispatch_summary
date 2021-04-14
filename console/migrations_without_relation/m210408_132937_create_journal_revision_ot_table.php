<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journal_revision_ot}}`.
 */
class m210408_132937_create_journal_revision_ot_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journal_revision_ot}}', [
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
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%journal_revision_ot}}');
    }
}
