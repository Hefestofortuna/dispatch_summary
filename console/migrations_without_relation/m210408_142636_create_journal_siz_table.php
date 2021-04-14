<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%journal_siz}}`.
 */
class m210408_142636_create_journal_siz_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%journal_siz}}', [
            'id' => $this->primaryKey(),
            'station_id' => $this->integer()->notNull()->comment('Станция'),
            'subdivision_id' => $this->integer()->notNull()->comment('Подразделение'),
            'num' => $this->string()->notNull()->comment('Номер СИЗ'),
            'putdate' => $this->date()->notNull()->comment('Дата проверки'),
            'name' => $this->string()->notNull()->comment('Наименование'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%journal_siz}}');
    }
}
