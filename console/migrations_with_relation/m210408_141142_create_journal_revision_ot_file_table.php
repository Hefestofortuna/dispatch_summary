<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journal_revision_ot_file}}`.
 */
class m210408_141142_create_journal_revision_ot_file_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journal_revision_ot_file}}', [
            'id' => $this->primaryKey(),
            'journal_revision_ot_id' => $this->integer()->notNull()->comment('Идентификатор проверки'),
            'file' => $this->string()->notNull()->comment('Файл'),
            'date_upload' => $this->date()->notNull()->comment('Дата загрузки'),
            'type' => $this->boolean()->defaultValue(false)->notNull()->comment('Тип загрузки'),
            'title' => $this->string()->notNull()->comment('Заголовок'),
        ]);

        $this->createIndex(
            'idx-journal_revision_ot_file-journal_revision_ot_id',
            'journal_revision_ot_file',
            'journal_revision_ot_id'
        );

        $this->addForeignKey(
            'fk-journal_revision_ot_file-journal_revision_ot_id',
            'journal_revision_ot_file',
            'journal_revision_ot_id',
            'journal_revision_ot',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%journal_revision_ot_file}}');
    }
}
