<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%incoming_sam}}`.
 */
class m210408_074527_create_incoming_sam_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%incoming_sam}}', [
            'id' => $this->primaryKey(),
            'docs' => $this->integer()->notNull()->comment('Заголовок'),
            'date' => $this->date()->notNull()->comment('Срок устранения'),
            'isp_user_id' => $this->string()->notNull()->comment('Исполнитель'),
            'description' => $this->string()->notNull()->comment('Описание'),
            'status' => $this->boolean()->notNull()->defaultValue(false)->comment('Статус'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%incoming_sam}}');
    }
}
