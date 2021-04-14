<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'is_admin' => $this->boolean()->notNull(),
            'subdivision_id' => $this->integer()->null(),
            'organization_id' => $this->integer()->null(),
            'name' => $this->string(64)->notNull(),
            'id_post' => $this->integer()->notNull(),
            'description' => $this->string(256)->null(),
            'phone' => $this->integer(11)->null(),
            'reinstruction' => $this->boolean()->notNull(),

        ]);

        $this->createIndex(
            'idx-user-subdivision_id',
            'user',
            'subdivision_id'
        );

        $this->addForeignKey(
            'fk-user-subdivision_id',
            'user',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-user-organization_id',
            'user',
            'organization_id'
        );

        $this->addForeignKey(
            'fk-user-organization_id',
            'user',
            'organization_id',
            'organization',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
