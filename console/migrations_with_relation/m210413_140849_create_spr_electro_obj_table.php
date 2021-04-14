<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%spr_electro_obj}}`.
 */
class m210413_140849_create_spr_electro_obj_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%spr_electro_obj}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->comment('Объект'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);

        $this->createIndex(
            'idx-spr_electro_obj-organization_id',
            'spr_electro_obj',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-spr_electro_obj-organization_id',
            'spr_electro_obj',
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
        $this->dropTable('{{%spr_electro_obj}}');
    }
}
