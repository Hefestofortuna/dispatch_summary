<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spr_auto}}`.
 */
class m210413_131717_create_spr_auto_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spr_auto}}', [
            'id' => $this->primaryKey(),
            'brand' => $this->string()->notNull()->comment('Марка'),
            'number' => $this->string()->notNull()->comment('Гос. номер'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
            'date_check' => $this->date()->defaultValue(null)->comment('Дата осмотра'),
            'ts_reestr' => $this->integer()->notNull()->comment('ТИП ТС (по реестру)'),
            'ts_class' => $this->integer()->notNull()->comment('Тип ТС по классификатору'),
            'fuel' => $this->integer()->notNull()->comment('Вид топлива'),
        ]);

        $this->createIndex(
            'idx-spr_auto-organization_id',
            'spr_auto',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-spr_auto-organization_id',
            'spr_auto',
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
        $this->dropTable('{{%spr_auto}}');
    }
}
