<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%work}}`.
 */
class m210406_152547_create_work_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%work}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string()->notNull()->comment('Шифр'),
            'doc' => $this->string()->notNull()->comment('Инструкция'),
            'tkarta' => $this->string()->notNull()->comment('Раздел/Пункт'),
            'text' => $this->string()->notNull()->comment('Наименование работ'),
            'period' => $this->string()->notNull()->comment('Период'),
            'type' => $this->string()->comment('Вид'),
            'category' => $this->tinyInteger()->notNull()->comment('Категория'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%work}}');
    }
}
