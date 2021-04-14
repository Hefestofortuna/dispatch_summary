<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%station}}`.
 */
class m210405_163831_create_station_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%station}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Станция'),
            'subdivision_id' => $this->integer()->notNull()->comment('Подразделение'),
            'dga_id' => $this->integer()->notNull()->comment('ДГА'),
            'stType' => $this->boolean()->notNull()->comment('Станция/Перегон'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%station}}');
    }
}
