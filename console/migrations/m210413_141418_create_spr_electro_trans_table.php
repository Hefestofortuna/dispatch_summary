<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spr_electro_trans}}`.
 */
class m210413_141418_create_spr_electro_trans_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spr_electro_trans}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Название'),
            'k_tr' => $this->string()->notNull()->comment('Коэф. транс.'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%spr_electro_trans}}');
    }
}
