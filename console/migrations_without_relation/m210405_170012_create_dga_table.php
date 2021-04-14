<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dga}}`.
 */
class m210405_170012_create_dga_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dga}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата'),
            'time_on' => $this->time()->notNull()->comment('Вкл'),
            'time_off' => $this->time()->notNull()->comment('Откл'),
            'kol' => $this->integer()->notNull()->comment('Количество топлива'),
            'station_id' => $this->integer()->notNull()->comment('Станция'),
            'user_id' => $this->integer()->notNull()->comment('Передал'),
            'underPressure' => $this->integer()->notNull()->comment('Проверка с нагрузкой'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
            'description' => $this->string()->notNull()->comment('Примечание'),
            'moto' => $this->integer()->notNull()->comment('Моточасы'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dga}}');
    }
}
