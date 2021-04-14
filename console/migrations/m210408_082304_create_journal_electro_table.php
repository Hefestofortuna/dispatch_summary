<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journal_electro}}`.
 */
class m210408_082304_create_journal_electro_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journal_electro}}', [
            'id' => $this->primaryKey(),
            'putdate' => $this->date()->notNull()->comment('Дата передачи показания'),
            'indication' => $this->integer()->notNull()->comment('Показание счетчика'),
            'user_id' => $this->integer()->notNull()->comment('Пользователь'),
            'spr_electro_id' => $this->integer()->notNull()->comment('Тип счетчика/номер'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%journal_electro}}');
    }
}
