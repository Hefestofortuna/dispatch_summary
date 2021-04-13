<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journalspt}}`.
 */
class m210408_145922_create_journalspt_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journalspt}}', [
            'id' => $this->primaryKey(),
            'date_create' => $this->date()->notNull()->comment('Дата регистрации'),
            'time_create' => $this->time()->notNull()->comment('Время регистрации'),
            'character' => $this->string()->notNull()->comment('Характер неисправности'),
            'reported' => $this->string()->notNull()->comment('Сообщил'),
            'sprspt_id' => $this->integer()->notNull()->comment('Объект'),
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
            'idx-journalspt-sprspt_id',
            'journalspt',
            'sprspt_id'
        );

        $this->addForeignKey(
            'fk-journalspt-sprspt_id',
            'journalspt',
            'sprspt_id',
            'sprspt',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journalspt-organization_id',
            'journalspt',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-journalspt-organization_id',
            'journalspt',
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
        $this->dropTable('{{%journalspt}}');
    }
}
