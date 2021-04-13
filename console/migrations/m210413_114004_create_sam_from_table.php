<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sam_from}}`.
 */
class m210413_114004_create_sam_from_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sam_from}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Название'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sam_from}}');
    }
}
