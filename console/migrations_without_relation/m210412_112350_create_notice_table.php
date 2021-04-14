<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%notice}}`.
 */
class m210412_112350_create_notice_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%notice}}', [
            'id' => $this->primaryKey(),
            'give' => $this->string('50')->notNull()->comment('Кто дал'),
            'text' => $this->string()->notNull()->comment('Объявление'),
            'user_id' => $this->integer()->notNull()->comment('Пользователь'),
            'putdate' => $this->date()->notNull()->comment('Дата'),
            'subdivision_id' => $this->integer()->notNull()->comment('Подразделение'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);}

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%notice}}');
    }
}
