<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journal_izol}}`.
 */
class m210408_092728_create_journal_izol_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journal_izol}}', [
            'id' => $this->primaryKey(),
            'station_id' => $this->integer()->notNull()->comment('Станция/Перегон'),
            'place' => $this->string()->notNull()->comment('Место'),
            'mark' => $this->string()->notNull()->comment('Марка укладки и длина кабеля, м'),
            'date_create' => $this->date()->notNull()->comment('Дата обнаружения'),
            'r_izol_start' => $this->float('10,3')->defaultValue('0.000')->comment('R изоляции'),
            'description' => $this->string()->notNull()->comment('Описание'),
            'shns_user_id' => $this->integer()->notNull()->comment('Сообщил ШН/ШНС'),
            'date_finish' => $this->date()->defaultValue(null)->comment('Дата устранения'),
            'step' => $this->string()->notNull()->comment('Принятые меры'),
            'status' => $this->boolean()->notNull()->defaultValue(false)->comment('Статус'),
            'r_izol_end' => $this->float('10,3')->comment('Текущее R изоляции'),
            'date_next' => $this->date()->comment('Дата след. проверки'),
            'isDevice' => $this->boolean()->defaultValue(false)->notNull()->comment('Кабель/Устройство'),
            'organization_id' => $this->integer()->notNull()->comment('Кабель/Устройство'),
        ]);

        $this->createIndex(
            'idx-journal_izol-organization_id',
            'journal_izol',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-journal_izol-organization_id',
            'journal_izol',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_izol-shns_user_id',
            'journal_izol',
            'shns_user_id'
        );

        $this->addForeignKey(
            'fk-journal_izol-shns_user_id',
            'journal_izol',
            'shns_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journal_izol-station_id',
            'journal_izol',
            'station_id'
        );

        $this->addForeignKey(
            'fk-journal_izol-station_id',
            'journal_izol',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%journal_izol}}');
    }
}
