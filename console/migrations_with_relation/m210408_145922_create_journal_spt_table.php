<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journal_spt}}`.
 */
class m210408_145922_create_journal_spt_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journal_spt}}', [
            'id' => $this->primaryKey(),
            'date_create' => $this->date()->notNull()->comment('Дата регистрации'),
            'time_create' => $this->time()->notNull()->comment('Время регистрации'),
            'character' => $this->string()->notNull()->comment('Характер неисправности'),
            'reported' => $this->string()->notNull()->comment('Сообщил'),
            'spr_spt_id' => $this->integer()->notNull()->comment('Объект'),
            'date_to' => $this->date()->defaultValue(null)->comment('Дата оповещения о неисправности'),
            'time_to' => $this->time()->defaultValue(null)->comment('Время оповещения о неисправности'),
            'pers_to' => $this->string()->defaultValue(null)->comment('ФИО/Должность'),
            'date_finish' => $this->date()->defaultValue(null)->comment('Дата устранения'),
            'time_finish' => $this->time()->defaultValue(null)->comment('Время устранения'),
            'pers_finish' => $this->string()->defaultValue(null)->comment('Подтвердил'),
            'description' => $this->string()->defaultValue(null)->comment('Примечание'),
            'status' => $this->string()->notNull()->defaultValue(false)->comment('Статус'),
            'shd_finish' => $this->string()->defaultValue(null)->comment('Доложил об устранении'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);

        $this->createIndex(
            'idx-journal_spt-spr_spt_id',
            'journal_spt',
            'spr_spt_id'
        );

        $this->addForeignKey(
            'fk-journal_spt-spr_spt_id',
            'journal_spt',
            'spr_spt_id',
            'spr_spt',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_spt-organization_id',
            'journal_spt',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-journal_spt-organization_id',
            'journal_spt',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%journal_spt}}');
    }
}
