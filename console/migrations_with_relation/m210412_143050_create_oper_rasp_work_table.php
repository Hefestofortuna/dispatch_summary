<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%oper_rasp_work}}`.
 */
class m210412_143050_create_oper_rasp_work_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%oper_rasp_work}}', [
            'id' => $this->primaryKey(),
            'oper_rasp_id' => $this->integer()->notNull()->comment('Оперативное распаряжение'),
            'oper_rasp_isp_id' => $this->integer()->notNull()->comment('Оперативное распаряжение'),
            'comment' => $this->string()->notNull()->comment('Замечание'),
            'work' => $this->string()->notNull()->comment('Мероприятие'),
            'date_term' => $this->date()->defaultValue(null)->comment('Срок устранения'),
            'date_finish' => $this->date()->defaultValue(null)->comment('Дата завершения'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%oper_rasp_work}}');
    }
}
