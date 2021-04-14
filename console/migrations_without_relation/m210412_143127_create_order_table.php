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
            'date_off' => $this->date()->defaultValue(null)->comment('Дата выкл.'),
            'time_off' => $this->time()->defaultValue(null)->comment('Время выкл.'),
            'shns_off_user_id' => $this->integer()->notNull()->defaultValue('0')->comment('Ответ. ШН/ШНС'),
            'shchd_off_user_id' => $this->integer()->notNull()->defaultValue('0')->comment('ШЧД/ШЧДС'),
            'apply_ds' => $this->string()->notNull()->defaultValue('')->comment('Разрешен ДС'),
            'apply_shch_user_id' => $this->integer()->notNull()->defaultValue('0')->comment('Разрешен ШЧ'),
            'date_on' => $this->date()->defaultValue(null)->comment('Дата вкл.'),
            'time_on' => $this->time()->defaultValue(null)->comment('Время вкл.'),
            'shns_on_user_id' => $this->integer()->notNull()->defaultValue('0')->comment('Ответ. ШН/ШНС'),
            'shchd_on_user_id' => $this->integer()->notNull()->defaultValue('0')->comment('ШЧД/ШЧДС'),
            'description_on' => $this->string()->notNull()->comment('Примечание'),
            'num_on' => $this->integer()->notNull()->comment('Номер включения'),
            'date' => $this->date()->notNull()->comment('Дата'),
            'organization_id' => $this->date()->notNull()->comment('Предприятие'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}
