<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%social_inspect}}`.
 */
class m210413_122631_create_social_inspect_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%social_inspect}}', [
            'id' => $this->primaryKey(),
            'date_find' => $this->date()->notNull()->comment('Дата выявления предотказного состояния'),
            'station_id' => $this->integer()->notNull()->comment('Место предотказного состояния'),
            'comment' => $this->string()->notNull()->comment('Параметр предотказного состояния'),
            'service_id' => $this->integer()->notNull()->comment('Отвественное предприятие'),
            'user_id' => $this->integer()->notNull()->comment('Выявил на месте'),
            'who_give' => $this->string()->notNull()->comment('Предеанно'),
            'date_last' => $this->date()->notNull()->comment('Устранить до'),
            'date_fix' => $this->date()->defaultValue(null)->comment('Дата устранения'),
            'who_control' => $this->string()->defaultValue(null)->comment('Контроль фактического устранения'),
            'organization_id' => $this->string()->notNull()->comment('Предприятие'),
        ]);

        $this->createIndex(
            'idx-social_inspect-station_id',
            'social_inspect',
            'station_id'
        );

        $this->addForeignKey(
            'fk-social_inspect-station_id',
            'social_inspect',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-social_inspect-service_id',
            'social_inspect',
            'service_id'
        );

        $this->addForeignKey(
            'fk-social_inspect-service_id',
            'social_inspect',
            'service_id',
            'service',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-social_inspect-user_id',
            'social_inspect',
            'user_id'
        );

        $this->addForeignKey(
            'fk-social_inspect-user_id',
            'social_inspect',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-social_inspect-organization_id',
            'social_inspect',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-social_inspect-organization_id',
            'social_inspect',
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
        $this->dropTable('{{%social_inspect}}');
    }
}
