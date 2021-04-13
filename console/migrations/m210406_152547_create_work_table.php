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
            'code' => $this->string()->notNull(),
            'doc' => $this->string()->notNull(),
            'tkarta' => $this->string()->notNull(),
            'text' => $this->string()->notNull(),
            'period' => $this->string()->notNull(),
            'type' => $this->string(),
            'category' => $this->tinyInteger()->notNull(),
            'organization_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-work-organization_id',
            'work',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-work-organization_id',
            'work',
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
        $this->dropTable('{{%work}}');
    }
}
