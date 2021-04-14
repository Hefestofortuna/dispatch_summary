<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m210407_143656_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Наименование'),
            'parent_id' => $this->integer()->notNull()->defaultValue('0')->comment('Родительская папка'),
            'otdel_id' => $this->integer()->notNull()->comment('Отдел'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);

        $this->createIndex(
            'idx-category-organization_id',
            'category',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-category-organization_id',
            'category',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-category-otdel_id',
            'category',
            'otdel_id'
        );

        $this->addForeignKey(
            'fk-category-otdel_id',
            'category',
            'otdel_id',
            'otdel',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
