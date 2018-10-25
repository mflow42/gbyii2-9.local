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
            'id' => $this->primaryKey(),
            'login' => $this->string(50),
            'password' => $this->string(50),
            'email' => $this->string(50),
            'banned' => $this->boolean(),
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
