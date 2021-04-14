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
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%spr_electro}}');
    }
}
