<?php

use yii\db\Migration;

/**
 * Handles the creation of table `activity`.
 */
class m181025_224357_create_activity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('activity', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'start_day' => $this->date(),
            'end_day' => $this->date(),
            'id_author' => $this->integer()->notNull(),
            'body' => $this->string(2000)->notNull(),
            'is_repeat' => $this->boolean(),
            'is_blocker' => $this->boolean(),
        ]);
        
        $this->addForeignKey(
              'user-activity',
              'activity',
              'id_author',
              'user',
              'id');
    }
    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->dropForeignKey('user-activity', 'user');
      $this->dropTable('activity');
    }
}
