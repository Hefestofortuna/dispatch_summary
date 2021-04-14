<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%organization}}`.
 */
class m210330_140018_create_organization_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%organization}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Наименование предприятия'),
            'code' => $this->string()->notNull()->comment('Шифр'),
            'leader_user_id' => $this->integer()->notNull()->comment('Начальник подразделения'),
            'code_asui' => $this->string()->comment('Код ЕКАСУИ'),
        ]);

        $this->createIndex(
            'idx-organization-user_id',
            'organization',
            'user_id'
        );

        $this->addForeignKey(
            'fk-organization-user_id',
            'organization',
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
        $this->dropTable('{{%organization}}');
    }
}
