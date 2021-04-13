<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dgaList}}`.
 */
class m210405_165959_create_dgaList_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dgaList}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Марка ДГА'),
            'col' => $this->integer()->notNull()->comment('Неснижаемый запас'),
            'organization_id' => $this->integer()->notNull()->comment('Подразделение'),
        ]);
        $this->createIndex(
            'idx-dgaList-organization_id',
            'dgaList',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-dgaList-organization_id',
            'dgaList',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dgaList}}');
    }
}
