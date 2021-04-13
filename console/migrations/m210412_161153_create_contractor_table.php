<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contractor}}`.
 */
class m210412_161153_create_contractor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contractor}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Наименование'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contractor}}');
    }
}
