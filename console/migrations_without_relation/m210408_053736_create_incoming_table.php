x<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%incoming}}`.
 */
class m210408_053736_create_incoming_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%incoming}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Заголовок'),
            'putdate' => $this->date()->notNull()->comment('Дата регистрации'),
            'num' => $this->string()->notNull()->comment('Номер'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
            'file' => $this->string()->defaultValue(null)->comment('Документ'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%incoming}}');
    }
}
