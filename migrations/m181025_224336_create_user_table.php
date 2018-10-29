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
            'name'         => $this->string(50),
            'email'        => $this->string(50),
            'auth_key'     => $this->string(255),
            'access_token' => $this->string(255),
            'banned'       => $this->boolean(),
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
