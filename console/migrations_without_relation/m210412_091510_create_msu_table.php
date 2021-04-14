<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%msu}}`.
 */
class m210412_091510_create_msu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%msu}}', [
            'id' => $this->primaryKey(),
            'date_setup' => $this->date()->notNull()->comment('Дата установки'),
            'switch' => $this->integer()->notNull()->comment('Стрелка'),
            'power_supply' => $this->integer()->notNull()->defaultValue(1)->comment('Источник питания'),
            'msu_num' => $this->integer()->notNull()->comment('№ двигателя ЭМСУ'),
            'msu_year' => $this->integer('4')->notNull()->comment('Год выпуска двигателя ЭМСУ'),
            'msu_perevod_plus' => $this->decimal('10,3')->notNull()->comment('U МСП (+),В'),
            'msu_perevod_min' => $this->decimal('10,3')->notNull()->comment('U МСП (-),В'),
            'msu_friction_plus' => $this->decimal('10,3')->notNull()->comment('U фрикция МСП (+), В'),
            'msu_friction_min' => $this->decimal('10,3')->notNull()->comment('U фрикция МСП (-), В'),
            'emsu_perevod_plus' => $this->decimal('10,3')->notNull()->comment('U ЭМСУ-СП (+), В'),
            'emsu_perevod_min' => $this->decimal('10,3')->notNull()->comment('U ЭМСУ-СП (-), В'),
            'emsu_friction_plus' => $this->decimal('10,3')->notNull()->comment('U фрикция ЭМСУ-СП (+), В'),
            'emsu_friction_min' => $this->decimal('10,3')->notNull()->comment('U фрикция ЭМСУ-СП (-), В'),
            'emsu_usilie_friction_plus' => $this->integer('4')->notNull()->comment('Усилие фрикция ЭМСУ-СП(+), кгс'),
            'emsu_usilie_friction_min' => $this->integer('4')->notNull()->comment('Усилие фрикция ЭМСУ-СП(-), кгс'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
            'station_id' => $this->integer()->notNull()->comment('Станция'),
            'subdivision_id' => $this->integer()->notNull()->comment('Подразделение'),
            'user_id' => $this->integer()->notNull()->comment('Пользователь'),
            'date_create' => $this->date()->notNull()->comment('Дата создания'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%msu}}');
    }
}
