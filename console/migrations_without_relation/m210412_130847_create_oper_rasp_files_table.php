<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%oper_rasp_files}}`.
 */
class m210412_130847_create_oper_rasp_files_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%oper_rasp_file}}', [
            'id' => $this->primaryKey(),
            'oper_rasp_isp_id' => $this->integer('128')->notNull()->comment('Исполнитель'),
            'file' => $this->string('256')->notNull()->comment('Файл'),
            'putdate' => $this->date()->notNull()->comment('Дата публикации'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%oper_rasp_file}}');
    }
}
