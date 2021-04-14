<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%briefing}}`.
 */
class m210407_140029_create_briefing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%briefing}}', [
            'id' => $this->primaryKey(),
            'employee_user_id' => $this->integer()->notNull()->comment('Сотрудник'),
            'putdate' => $this->date()->notNull()->comment('Дата проведения'),
            'instructor_user_id' => $this->integer()->notNull()->comment('Инструктор'),
            'type' => $this->integer()->notNull()->defaultValue('1')->comment('Тип инструктажа'),
            'period' => $this->integer()->defaultValue('1')->comment('Периодичность'),
            'putdate_next' => $this->date()->defaultValue(null)->comment('Дата следующего проведения'),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%briefing}}');
    }
}
