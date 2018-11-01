<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m181025_224336_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id'           => $this->primaryKey(),
            'login'        => $this->string(50)->notNull(),
            'password'     => $this->string(50)->notNull(),
            'name'         => $this->string(50)->notNull(),
            'email'        => $this->string(50)->notNull(),
            'create_date'  => $this->integer(11)->notNull(),
            'update_date'  => $this->integer(11),
            'auth_key'     => $this->string(255),
            'access_token' => $this->string(255),
            'banned'       => $this->boolean()->notNull(),
            'ban_date'     => $this->integer(11),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
