<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%otdel}}`.
 */
class m210412_153146_create_otdel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%otdel}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Наименование'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%otdel}}');
    }
}
