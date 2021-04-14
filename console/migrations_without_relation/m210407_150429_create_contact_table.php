<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact}}`.
 */
class m210407_150429_create_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата'),
            'user_id' => $this->integer()->notNull()->comment('Контактное лицо'),
            'title' => $this->string()->notNull()->comment('Тема сообщения'),
            'text' => $this->string()->notNull()->comment('Сообщение'),
            'status' => $this->boolean()->notNull()->defaultValue(false)->comment('Состояние'),
            'organization_id' => $this->integer()->notNull()->comment('Подразделение'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contact}}');
    }
}
