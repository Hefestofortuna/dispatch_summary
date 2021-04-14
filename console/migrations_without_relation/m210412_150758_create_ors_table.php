<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ors}}`.
 */
class m210412_150758_create_ors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ors}}', [
            'id' => $this->primaryKey(),
            'station_id' => $this->integer()->notNull()->comment('Станция/Перегон'),
            'sum_main_pch' => $this->integer()->notNull()->defaultValue('0')->comment('Кол-во ПЧ (осн)'),
            'sum_main_shch' => $this->integer()->notNull()->defaultValue('0')->comment('Кол-во ШЧ (осн)'),
            'sum_main' => $this->integer()->notNull()->defaultValue('0')->comment('Всего (осн)'),
            'putdate' => $this->date()->notNull()->comment('Дата'),
            'sum_minor_pch' => $this->integer()->notNull()->defaultValue('0')->comment('Кол-во ПЧ (дуб)'),
            'sum_minor_shch' => $this->integer()->notNull()->defaultValue('0')->comment('Кол-во ШЧ (дуб)'),
            'sum_minor' => $this->integer()->notNull()->defaultValue('0')->comment('Всего (дуб)'),
            'subdivision_id' => $this->integer()->defaultValue(null)->comment('Подразделение'),
            'description' => $this->string()->defaultValue(null)->comment('Примечание'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ors}}');
    }
}
