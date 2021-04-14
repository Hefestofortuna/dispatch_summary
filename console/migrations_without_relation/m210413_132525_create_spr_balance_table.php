<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spr_balance}}`.
 */
class m210413_132525_create_spr_balance_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spr_balance}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Балансовая принадлежность'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%spr_balance}}');
    }
}
