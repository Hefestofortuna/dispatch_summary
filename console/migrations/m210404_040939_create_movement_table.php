 <?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%movement}}`.
 */
class m210404_040939_create_movement_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%movement}}', [
            'id' => $this->primaryKey(),
            'pubdate' => $this->date()->notNull(),
            'subdivision_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'status_id' => $this->integer()->notNull(),
            'work1' => $this->text(),
            'work2' => $this->text(),
            'duty' => $this->boolean()->notNull(),
            'organization_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-movement-organization_id',
            'movement',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-movement-organization_id',
            'movement',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-movement-status_id',
            'movement',
            'status_id'
        );

        $this->addForeignKey(
            'fk-movement-status_id',
            'movement',
            'status_id',
            'status',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-movement-user_id',
            'movement',
            'user_id'
        );

        $this->addForeignKey(
            'fk-movement-user_id',
            'movement',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-movement-subdivision_id',
            'movement',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-movement-subdivision_id',
            'movement',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%movement}}');
    }
}
