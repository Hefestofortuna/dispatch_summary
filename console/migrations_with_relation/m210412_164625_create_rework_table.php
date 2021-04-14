<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rework}}`.
 */
class m210412_164625_create_rework_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rework}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата'),
            'user_id' => $this->integer()->notNull()->comment('Сотрудник'),
            'time_start' => $this->time()->notNull()->comment('Время (с)'),
            'time_finish' => $this->time()->notNull()->comment('Время (по)'),
            'sum' => $this->float('10,2')->notNull()->comment('Переработка (часов)'),
            'description' => $this->string()->notNull()->comment('Примечание'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);

        $this->createIndex(
            'idx-rework-organization_id',
            'rework',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-rework-organization_id',
            'rework',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-rework-user_id',
            'rework',
            'user_id'
        );

        $this->addForeignKey(
            'fk-rework-user_id',
            'rework',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rework}}');
    }
}
