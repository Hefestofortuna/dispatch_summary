<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%autoservice}}`.
 */
class m210407_135155_create_autoservice_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%autoservice}}', [
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
        $this->dropTable('{{%autoservice}}');
    }
}
