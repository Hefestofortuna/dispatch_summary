<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%oper_rasp_isp}}`.
 */
class m210412_132800_create_oper_rasp_isp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%oper_rasp_isp}}', [
            'id' => $this->primaryKey(),
            'oper_rasp_sam_id' => $this->integer()->notNull()->comment('Пункт распоряжения'),
            'isp_user_id' => $this->integer()->notNull()->comment('Исполнитель'),
            'description' => $this->string()->comment('Примечание'),
            'date_finish' => $this->date()->defaultValue(null)->comment('Примечание'),
            'status' => $this->boolean()->notNull()->comment('Отметка о вы выполнении'),
            'oper_rasp_id' => $this->integer()->notNull()->comment('Оперативное распоряжение'),
            'percent' => $this->integer()->notNull()->defaultValue('0')->comment('Примечание'),
            'agreed_user_id' => $this->integer()->defaultValue(null)->comment('Отметка о выполнении'),
        ]);

        $this->createIndex(
            'idx-oper_rasp_isp-oper_rasp_id',
            'oper_rasp_sam',
            'oper_rasp_id'
        );

        $this->addForeignKey(
            'fk-oper_rasp_isp-oper_rasp_id',
            'oper_rasp_isp',
            'oper_rasp_id',
            'oper_rasp',
            'id',
            'CASCADE'
        );


        $this->createIndex(
            'idx-oper_rasp_isp-oper_rasp_sam_id',
            'oper_rasp_sam',
            'oper_rasp_sam_id'
        );

        $this->addForeignKey(
            'fk-oper_rasp_isp-oper_rasp_sam_id',
            'oper_rasp_isp',
            'oper_rasp_sam_id',
            'oper_rasp_sam',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-oper_rasp_isp-isp_user_id',
            'oper_rasp_isp',
            'isp_user_id'
        );

        $this->addForeignKey(
            'fk-oper_rasp_isp-isp_user_id',
            'oper_rasp_isp',
            'isp_user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-oper_rasp_isp-agreed_user_id',
            'oper_rasp_isp',
            'agreed_user_id'
        );

        $this->addForeignKey(
            'fk-oper_rasp_isp-agreed_user_id',
            'oper_rasp_isp',
            'agreed_user_id',
            'user',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%oper_rasp_isp}}');
    }
}
