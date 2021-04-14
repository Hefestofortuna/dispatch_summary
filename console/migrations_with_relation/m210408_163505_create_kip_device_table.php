<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kip_device}}`.
 */
class m210408_163505_create_kip_device_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kip_device}}', [
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
            'idx-kip_device-station_id',
            'kip_device',
            'station_id'
        );

        $this->addForeignKey(
            'fk-kip_device-station_id',
            'kip_device',
            'station_id',
            'station',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-kip_device-organization_id',
            'kip_device',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-kip_device-organization_id',
            'kip_device',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-kip_device-subdivision_id',
            'kip_device',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-kip_device-subdivision_id',
            'kip_device',
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
        $this->dropTable('{{%kip_device}}');
    }
}
