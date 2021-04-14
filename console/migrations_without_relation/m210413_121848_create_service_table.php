<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m210413_121848_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Служба'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }
}
