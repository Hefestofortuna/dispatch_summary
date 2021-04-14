<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spr_electro_type}}`.
 */
class m210413_141521_create_spr_electro_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spr_electro_type}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Тип счетчика'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%spr_electro_type}}');
    }
}
