<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%oper_rasp_sam}}`.
 */
class m210412_140916_create_oper_rasp_sam_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%oper_rasp_sam}}', [
            'id' => $this->primaryKey(),
            'oper_rasp_id' => $this->integer()->notNull()->comment('Документ'),
            'content' => $this->string('512')->notNull()->comment('Содержание распаряжения'),
            'date' => $this->date()->notNull()->comment('Срок исполнения'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%oper_rasp_sam}}');
    }
}
