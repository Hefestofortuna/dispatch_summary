<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spr_spt}}`.
 */
class m210413_142230_create_spr_spt_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spr_spt}}', [
            'id' => $this->primaryKey(),
            'station_id' => $this->integer()->notNull()->comment('Станция/Перегон'),
            'object' => $this->string()->notNull()->comment('Объект'),
            'spr_spt_system_id' => $this->integer()->notNull()->comment('Вид'),
            'spr_spt_type_id' => $this->integer()->notNull()->comment('Тип'),
            'spr_balance_id' => $this->integer()->notNull()->comment('Балансовая принадлежность'),
            'spr_class_id' => $this->integer()->notNull()->comment('Класс'),
        ]);

        $this->createIndex(
            'idx-spr_spt-spr_class_id',
            'spr_spt',
            'spr_class_id'
        );

        $this->addForeignKey(
            'fk-spr_spt-spr_class_id',
            'spr_spt',
            'spr_class_id',
            'spr_class',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_spt-spr_balance_id',
            'spr_spt',
            'spr_balance_id'
        );

        $this->addForeignKey(
            'fk-spr_spt-spr_balance_id',
            'spr_spt',
            'spr_balance_id',
            'spr_balance',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_spt-spr_spt_type_id',
            'spr_spt',
            'spr_spt_type_id'
        );

        $this->addForeignKey(
            'fk-spr_spt-spr_spt_type_id',
            'spr_spt',
            'spr_spt_type_id',
            'spr_spt_type',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_spt-spr_spt_system_id',
            'spr_spt',
            'spr_spt_system_id'
        );

        $this->addForeignKey(
            'fk-spr_spt-spr_spt_system_id',
            'spr_spt',
            'spr_spt_system_id',
            'spr_spt_system',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_spt-station_id',
            'spr_spt',
            'station_id'
        );

        $this->addForeignKey(
            'fk-spr_spt-station_id',
            'spr_spt',
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
        $this->dropTable('{{%spr_spt}}');
    }
}
