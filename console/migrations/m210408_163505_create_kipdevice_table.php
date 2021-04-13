<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kipdevice}}`.
 */
class m210408_163505_create_kipdevice_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kipdevice}}', [
            'id' => $this->primaryKey(),
            'station_id' => $this->integer()->defaultValue(null)->comment('Станция'),
            'subdivision_id' => $this->integer()->notNull()->comment('Подразделение'),
            'type_si' => $this->string()->notNull()->comment('Тип/Марка'),
            'num_si' => $this->string()->notNull()->comment('Заводской номер'),
            'pudate' => $this->date()->notNull()->comment('Дата колибровки'),
            'name' => $this->string()->notNull()->comment('Наименование'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);

        $this->createIndex(
            'idx-kipdevice-station_id',
            'kipdevice',
            'station_id'
        );

        $this->addForeignKey(
            'fk-kipdevice-station_id',
            'kipdevice',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-kipdevice-organization_id',
            'kipdevice',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-kipdevice-organization_id',
            'kipdevice',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-kipdevice-subdivision_id',
            'kipdevice',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-kipdevice-subdivision_id',
            'kipdevice',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kipdevice}}');
    }
}
