<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%revisionotfile}}`.
 */
class m210408_141142_create_revisionotfile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%revisionotfile}}', [
            'id' => $this->primaryKey(),
            'journalrevisionot_id' => $this->integer()->notNull()->comment('Идентификатор проверки'),
            'file' => $this->string()->notNull()->comment('Файл'),
            'date_upload' => $this->date()->notNull()->comment('Дата загрузки'),
            'type' => $this->boolean()->defaultValue(false)->notNull()->comment('Тип загрузки'),
            'title' => $this->string()->notNull()->comment('Заголовок'),
        ]);

        $this->createIndex(
            'idx-revisionotfile-journalrevisionot_id',
            'revisionotfile',
            'journalrevisionot_id'
        );

        $this->addForeignKey(
            'fk-revisionotfile-journalrevisionot_id',
            'revisionotfile',
            'journalrevisionot_id',
            'journalrevisionot',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%revisionotfile}}');
    }
}
