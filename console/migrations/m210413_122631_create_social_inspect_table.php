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
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%social_inspect}}');
    }
}
