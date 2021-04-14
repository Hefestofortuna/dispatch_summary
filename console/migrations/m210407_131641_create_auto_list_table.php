<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auto_list}}`.
 */
class m210407_131641_create_auto_list_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%auto_list}}', [
            'id' => $this->primaryKey(),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
            'putdate' => $this->date()->notNull()->comment('Дата'),
            'auto_id' => $this->integer()->notNull()->comment('Автотранспорт'),
            'user_id' => $this->integer()->notNull()->comment('Регистратор'),
            'hour' => $this->integer()->notNull()->comment('Часы'),
            'mileage' => $this->integer()->notNull()->comment('Пробег'),
            'consumption_liter' => $this->float()->notNull()->comment('Расход топлива в л.'),
            'kiloton' => $this->float()->notNull()->comment('Расход топлива в л.'),
            'consumption_ton' => $this->float()->notNull()->comment('Расход топлива в т.'),
        ]);

        $this->createIndex(
            'idx-auto_list-user_id',
            'auto_list',
            'user_id'
        );

        $this->addForeignKey(
            'fk-auto_list-user_id',
            'auto_list',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-auto_list-auto_id',
            'auto_list',
            'auto_id'
        );

        $this->addForeignKey(
            'fk-auto_list-auto_id',
            'auto_list',
            'auto_id',
            'spr_auto',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-auto_list-organization_id',
            'auto_list',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-auto_list-organization_id',
            'auto_list',
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
        $this->dropTable('{{%auto_list}}');
    }
}
