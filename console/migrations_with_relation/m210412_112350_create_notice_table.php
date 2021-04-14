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
        ]);

        $this->createIndex(
            'idx-notice-user_id',
            'notice',
            'user_id'
        );

        $this->addForeignKey(
            'fk-notice-user_id',
            'notice',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-notice-subdivision_id',
            'msu',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-notice-subdivision_id',
            'notice',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-notice-organization_id',
            'notice',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-notice-organization_id',
            'notice',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%notice}}');
    }
}
