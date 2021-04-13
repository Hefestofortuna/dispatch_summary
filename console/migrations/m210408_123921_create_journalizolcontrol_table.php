<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journalizolcontrol}}`.
 */
class m210408_123921_create_journalizolcontrol_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journalizolcontrol}}', [
            'id' => $this->primaryKey(),
            'journalizol_id' => $this->integer()->notNull()->comment('Кабель'),
            'putdate' => $this->integer()->notNull()->comment('Дата проверки'),
            'r_izol' => $this->float('10,3')->defaultValue('0.000')->comment('R изоляции'),
        ]);

        $this->createIndex(
            'idx-journalizolcontrol-journalizol_id',
            'journalizolcontrol',
            'journalizol_id'
        );

        $this->addForeignKey(
            'fk-journalizolcontrol-journalizol_id',
            'journalizolcontrol',
            'journalizol_id',
            'journalizol',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%journalizolcontrol}}');
    }
}
