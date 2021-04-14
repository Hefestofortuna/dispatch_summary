<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%oper_rasp}}`.
 */
class m210412_122659_create_oper_rasp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%oper_rasp}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string('128')->notNull()->comment('Название документа'),
            'date_create' => $this->date()->notNull()->comment('Дата регистрации'),
            'file' => $this->string()->notNull()->comment('Ссылка на документ'),
            'date_finish' => $this->date()->defaultValue(null)->comment('Дата завершения'),
            'status' => $this->boolean()->defaultValue(false)->notNull()->comment('Отметка о выполнении'),
            'short_name' => $this->string('8')->notNull()->comment('Краткое наименование, номер'),
            'user_id' => $this->integer()->defaultValue(null)->comment('Ответственное лицо'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%oper_rasp}}');
    }
}
