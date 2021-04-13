<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journalizol}}`.
 */
class m210408_092728_create_journalizol_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journalizol}}', [
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
            'izDevice' => $this->boolean()->defaultValue(false)->notNull()->comment('Кабель/Устройство'),
            'organization_id' => $this->boolean()->notNull()->comment('Кабель/Устройство'),
        ]);

        $this->createIndex(
            'idx-journalizol-organization_id',
            'journalizol',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-journalizol-organization_id',
            'journalizol',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journalizol-shns_user_id',
            'journalizol',
            'shns_user_id'
        );

        $this->addForeignKey(
            'fk-journalizol-shns_user_id',
            'journalizol',
            'shns_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journalizol-station_id',
            'journalizol',
            'station_id'
        );

        $this->addForeignKey(
            'fk-journalizol-station_id',
            'journalizol',
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
        $this->dropTable('{{%journalizol}}');
    }
}
