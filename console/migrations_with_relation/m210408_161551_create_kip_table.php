<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kip}}`.
 */
class m210408_161551_create_kip_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kip}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата'),
            'station_id' => $this->integer()->notNull()->comment('Станция'),
            'plan' => $this->integer()->notNull()->defaultValue('0')->comment('Количество приборов (план)'),
            'user_id' => $this->integer()->notNull()->comment('Пользователь'),
            'count_sent' => $this->integer()->notNull()->defaultValue('0')->comment('Пользователь'),
            'count_install' => $this->integer()->notNull()->defaultValue('0')->comment('Пользователь'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
            'date_install' => $this->integer()->defaultValue(null)->comment('Дата установки'),
            'date_ship' => $this->integer()->defaultValue(null)->comment('Дата отгрузки'),
            'subdivision_id' => $this->integer()->defaultValue(null)->comment('Подразделение'),
            'description' => $this->string()->defaultValue(null)->comment('Примечание'),
        ]);

        $this->createIndex(
            'idx-kip-station_id',
            'kip',
            'station_id'
        );

        $this->addForeignKey(
            'fk-kip-station_id',
            'kip',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-kip-user_id',
            'kip',
            'user_id'
        );

        $this->addForeignKey(
            'fk-kip-user_id',
            'kip',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-kip-organization_id',
            'kip',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-kip-organization_id',
            'kip',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-kip-subdivision_id',
            'kip',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-kip-subdivision_id',
            'kip',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kip}}');
    }
}
