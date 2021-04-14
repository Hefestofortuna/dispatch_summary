<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%planer}}`.
 */
class m210412_160355_create_planer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%planer}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата'),
            'test' => $this->string()->notNull()->comment('Содержание'),
            'leader' => $this->string()->notNull()->comment('Руководитель'),
            'date_create' => $this->date()->notNull()->comment('Дата создания'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%planer}}');
    }
}
