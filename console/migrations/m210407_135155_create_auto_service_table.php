<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auto_service}}`.
 */
class m210407_135155_create_auto_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%auto_service}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Наименование'),
            'period_odometr' => $this->integer()->comment('Периодичность по одометру'),
            'period_date' => $this->integer()->comment('Периодичность по дате'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%auto_service}}');
    }
}
