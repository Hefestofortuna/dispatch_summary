<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ksotpcategory}}`.
 */
class m210408_164921_create_ksotpcategory_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ksotpcategory}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Описание несоответствия'),
            'parent_id' => $this->integer()->notNull()->defaultValue('0')->comment('Описание несоответствия'),
            'type' => $this->integer()->notNull()->defaultValue('0')->comment('Описание несоответствия'),
            'rating' => $this->integer()->notNull()->defaultValue('2')->comment('Описание несоответствия'),
            'control' => $this->integer()->notNull()->defaultValue('0')->comment('Контрольный лист'),
        ]);

        $this->createIndex(
            'idx-ksotpcategory-parent_id',
            'ksotpcategory',
            'parent_id'
        );

        $this->addForeignKey(
            'fk-ksotpcategory-parent_id',
            'ksotpcategory',
            'parent_id',
            'ksotpcategory',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ksotpcategory}}');
    }
}
