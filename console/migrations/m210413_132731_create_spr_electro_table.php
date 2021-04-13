<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spr_electro}}`.
 */
class m210413_132731_create_spr_electro_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spr_electro}}', [
            'id' => $this->primaryKey(),
            'subdivision_id' => $this->integer()->notNull()->comment('Подразделение'),
            'spr_electro_type_id' => $this->integer()->notNull()->comment('Тип счетчика'),
            'spr_electro_obj_id' => $this->integer()->notNull()->comment('Объект'),
            'fider_type' => $this->integer()->notNull()->defaultValue('0')->comment('Фидер'),
            'place' => $this->string()->defaultValue(null)->comment('Место'),
            'number' => $this->string()->notNull()->comment('Номер'),
            'spr_electro_trans_id' => $this->integer()->notNull()->comment('Трансформатор'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
            'active' => $this->boolean()->notNull()->defaultValue(true)->comment('Работает'),
        ]);

        $this->createIndex(
            'idx-spr_electro-subdivision_id',
            'spr_electro',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-spr_electro-subdivision_id',
            'spr_electro',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_electro-spr_electro_type_id',
            'spr_electro',
            'spr_electro_type_id'
        );

        $this->addForeignKey(
            'fk-spr_electro-spr_electro_type_id',
            'spr_electro',
            'spr_electro_type_id',
            'spr_electro_type',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_electro-spr_electro_obj_id',
            'spr_electro',
            'spr_electro_obj_id'
        );

        $this->addForeignKey(
            'fk-spr_electro-spr_electro_obj_id',
            'spr_electro',
            'spr_electro_obj_id',
            'spr_electro_obj',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_electro-spr_electro_trans_id',
            'spr_electro',
            'spr_electro_trans_id'
        );

        $this->addForeignKey(
            'fk-spr_electro-spr_electro_trans_id',
            'spr_electro',
            'spr_electro_trans_id',
            'spr_electro_trans',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-spr_electro-organization_id',
            'spr_electro',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-spr_electro-organization_id',
            'spr_electro',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%spr_electro}}');
    }
}
