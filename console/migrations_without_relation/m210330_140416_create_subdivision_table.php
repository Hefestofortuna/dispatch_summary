<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subdivision}}`.
 */
class m210330_140416_create_subdivision_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subdivision}}', [
            'id' => $this->primaryKey(),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
            'title' => $this->string()->notNull()->comment('Наименование подразделения'),
            'user_id' => $this->integer()->notNull()->comment('Начальник подразделения'),
            'briefing' => $this->boolean()->notNull()->comment('Инструктаж'),
            'ekasui_title' => $this->string()->notNull()->comment('Обозначение в ЕКАСУИ'),
            'code_asui' => $this->string()->comment('Код ЕКАСУИ'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subdivision}}');
    }
}
