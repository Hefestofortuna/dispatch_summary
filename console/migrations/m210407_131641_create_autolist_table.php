<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%autolist}}`.
 */
class m210407_131641_create_autolist_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%autolist}}', [
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
            'idx-autolist-user_id',
            'autolist',
            'user_id'
        );

        $this->addForeignKey(
            'fk-autolist-user_id',
            'autolist',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-autolist-auto_id',
            'autolist',
            'auto_id'
        );

        $this->addForeignKey(
            'fk-autolist-auto_id',
            'autolist',
            'auto_id',
            'spr_auto',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-autolist-organization_id',
            'autolist',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-autolist-organization_id',
            'autolist',
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
        $this->dropTable('{{%autolist}}');
    }
}
