<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%incomingsam}}`.
 */
class m210408_074527_create_incomingsam_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%incomingsam}}', [
            'id' => $this->primaryKey(),
            'docs' => $this->integer()->notNull()->comment('Заголовок'),
            'date' => $this->date()->notNull()->comment('Срок устранения'),
            'isp_user_id' => $this->string()->notNull()->comment('Исполнитель'),
            'description' => $this->string()->notNull()->comment('Описание'),
            'status' => $this->boolean()->notNull()->defaultValue(false)->comment('Статус'),
        ]);

        $this->createIndex(
            'idx-incomingsam-isp_user_id',
            'incomingsam',
            'isp_user_id'
        );

        $this->addForeignKey(
            'fk-incomingsam-isp_user_id',
            'incomingsam',
            'isp_user_id',
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
        $this->dropTable('{{%incomingsam}}');
    }
}
