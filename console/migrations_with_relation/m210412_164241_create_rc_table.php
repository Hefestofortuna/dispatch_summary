<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rc}}`.
 */
class m210412_164241_create_rc_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rc}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Рельсовая цепь'),
            'station_id' => $this->integer()->notNull()->comment('Станция/Перегон'),
        ]);

        $this->createIndex(
            'idx-rc-station_id',
            'rc',
            'station_id'
        );

        $this->addForeignKey(
            'fk-rc-station_id',
            'rc',
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
        $this->dropTable('{{%rc}}');
    }
}
