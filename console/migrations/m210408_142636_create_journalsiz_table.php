<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journalsiz}}`.
 */
class m210408_142636_create_journalsiz_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journalsiz}}', [
            'id' => $this->primaryKey(),
            'station_id' => $this->integer()->notNull()->comment('Станция'),
            'subdivision_id' => $this->integer()->notNull()->comment('Подразделение'),
            'num' => $this->string()->notNull()->comment('Номер СИЗ'),
            'putdate' => $this->date()->notNull()->comment('Дата проверки'),
            'name' => $this->string()->notNull()->comment('Наименование'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);

        $this->createIndex(
            'idx-journalsiz-organization_id',
            'journalsiz',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-journalsiz-organization_id',
            'journalsiz',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journalsiz-subdivision_id',
            'journalsiz',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-journalsiz-subdivision_id',
            'journalsiz',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-journalsiz-station_id',
            'journalsiz',
            'station_id'
        );

        $this->addForeignKey(
            'fk-journalsiz-station_id',
            'journalsiz',
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
        $this->dropTable('{{%journalsiz}}');
    }
}
