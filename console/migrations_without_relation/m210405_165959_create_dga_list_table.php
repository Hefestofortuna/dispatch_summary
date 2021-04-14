<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dgaList}}`.
 */
class m210405_165959_create_dga_list_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dga_list}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Марка ДГА'),
            'col' => $this->integer()->notNull()->comment('Неснижаемый запас'),
            'organization_id' => $this->integer()->notNull()->comment('Подразделение'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dga_list}}');
    }
}
