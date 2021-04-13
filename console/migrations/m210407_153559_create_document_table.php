<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%document}}`.
 */
class m210407_153559_create_document_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%document}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Название'),
            'file' => $this->string()->notNull()->comment('Документ'),
            'date_upload' => $this->dateTime()->notNull()->comment('Дата загрузки'),
            'date_modify' => $this->dateTime()->notNull()->defaultValue(null)->comment('Дата изменения'),
            'isNews' => $this->boolean()->notNull()->defaultValue('1')->comment('Показывать в новостях'),
            'user_id' => $this->integer()->notNull()->comment('Пользователь'),
            'category_id' => $this->integer()->notNull()->comment('Родительская папка'),
            'otdel_id' => $this->integer()->notNull()->comment('Отдел'),
            'target' => $this->integer()->defaultValue(null)->comment('Назначение'),
        ]);

        $this->createIndex(
            'idx-document-user_id',
            'document',
            'user_id'
        );

        $this->addForeignKey(
            'fk-document-user_id',
            'document',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-document-category_id',
            'document',
            'category_id'
        );

        $this->addForeignKey(
            'fk-document-category_id',
            'document',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-document-otdel_id',
            'document',
            'otdel_id'
        );

        $this->addForeignKey(
            'fk-document-otdel_id',
            'document',
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
        $this->dropTable('{{%document}}');
    }
}
