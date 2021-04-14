<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ksotp_category}}`.
 */
class m210408_164921_create_ksotp_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ksotp_category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Описание несоответствия'),
            'parent_id' => $this->integer()->notNull()->defaultValue('0')->comment('Описание несоответствия'),
            'type' => $this->integer()->notNull()->defaultValue('0')->comment('Описание несоответствия'),
            'rating' => $this->integer()->notNull()->defaultValue('2')->comment('Описание несоответствия'),
            'control' => $this->integer()->notNull()->defaultValue('0')->comment('Контрольный лист'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ksotp_category}}');
    }
}
