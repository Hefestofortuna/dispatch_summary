<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m210412_143127_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'num_off' => $this->integer()->notNull()->comment('Номер разрешения'),
            'station_id' => $this->integer()->notNull()->comment('Станция/Перегон'),
            'card_id' => $this->integer()->notNull()->comment('Работа'),
            'description_off' => $this->string()->notNull()->comment('Примечание заявки'),
            'date_off' => $this->date()->defaultValue('0000-00-00')->comment('Дата выкл.'),
            'time_off' => $this->time()->defaultValue('00:00:00')->comment('Время выкл.'),
            'shns_off_user_id' => $this->integer()->notNull()->defaultValue('0')->comment('Ответ. ШН/ШНС'),
            'shchd_off_user_id' => $this->integer()->notNull()->defaultValue('0')->comment('ШЧД/ШЧДС'),
            'apply_ds' => $this->string()->notNull()->defaultValue('')->comment('Разрешен ДС'),
            'apply_shch_user_id' => $this->integer()->notNull()->defaultValue('0')->comment('Разрешен ШЧ'),
            'date_on' => $this->date()->defaultValue('0000-00-00')->comment('Дата вкл.'),
            'time_on' => $this->time()->defaultValue('00:00:00')->comment('Время вкл.'),
            'shns_on_user_id' => $this->integer()->notNull()->defaultValue('0')->comment('Ответ. ШН/ШНС'),
            'shchd_on_user_id' => $this->integer()->notNull()->defaultValue('0')->comment('ШЧД/ШЧДС'),
            'description_on' => $this->string()->notNull()->comment('Примечание'),
            'num_on' => $this->integer()->notNull()->comment('Номер включения'),
            'date' => $this->date()->notNull()->comment('Дата'),
            'organization_id' => $this->date()->notNull()->comment('Предприятие'),
        ]);

        $this->createIndex(
            'idx-order-shchd_on_user_id',
            'order',
            'shchd_on_user_id'
        );

        $this->addForeignKey(
            'fk-order-shchd_on_user_id',
            'order',
            'shchd_on_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-shns_on_user_id',
            'order',
            'shns_on_user_id'
        );

        $this->addForeignKey(
            'fk-order-shns_on_user_id',
            'order',
            'shns_on_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-apply_shch_user_id',
            'order',
            'apply_shch_user_id'
        );

        $this->addForeignKey(
            'fk-order-apply_shch_user_id',
            'order',
            'apply_shch_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-shchd_off_user_id',
            'order',
            'shchd_off_user_id'
        );

        $this->addForeignKey(
            'fk-order-shchd_off_user_id',
            'order',
            'shchd_off_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-shns_off_user_id',
            'order',
            'shns_off_user_id'
        );

        $this->addForeignKey(
            'fk-order-shns_off_user_id',
            'order',
            'shns_off_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-card_id',
            'order',
            'card_id'
        );

        $this->addForeignKey(
            'fk-order-card_id',
            'order',
            'card_id',
            'card',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-organization_id',
            'order',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-order-organization_id',
            'order',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-order-station_id',
            'order',
            'station_id'
        );

        $this->addForeignKey(
            'fk-order-station_id',
            'order',
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
        $this->dropTable('{{%order}}');
    }
}
