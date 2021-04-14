<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%plan}}`.
 */
class m210412_155428_create_plan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%plan}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата'),
            'work' => $this->string()->comment('Шифр работы'),
            'station' => $this->string()->comment('Станция'),
            'subdivision' => $this->string()->comment('Бригада'),
            'expired' => $this->string()->comment('Просрочено'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
            'work_plan' => $this->integer()->notNull()->defaultValue('0')->comment('Плановая трудоемкость'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%plan}}');
    }
}
