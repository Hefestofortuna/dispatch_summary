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
            'organization_id' => $this->integer()->notNull()->comment(''),
            'title' => $this->string()->notNull()->comment(''),
            'user_id' => $this->integer()->notNull()->comment(''),
            'briefing' => $this->boolean()->notNull()->comment(''),
            'ekasui_title' => $this->string()->notNull()->comment('Обозначение в ЕКАСУИ'),
            'code_asui' => $this->string()->comment('Код ЕКАСУИ'),
        ]);

        $this->createIndex(
            'idx-subdivision-user_id',
            'subdivision',
            'user_id'
        );

        $this->addForeignKey(
            'fk-subdivision-user_id',
            'subdivision',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-subdivision-organization_id',
            'subdivision',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-subdivision-organization_id',
            'subdivision',
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
        $this->dropTable('{{%subdivision}}');
    }
}
