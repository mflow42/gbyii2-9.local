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
            'title' => $this->string(255),
            'startDay' => $this->date(),
            'endDay' => $this->date(),
            'idAuthor' => $this->integer(),
            'body' => $this->string(2000),
            'isRepeat' => $this->boolean(),
            'isBlocker' => $this->boolean(),
            'isWeekend' => $this->boolean(),
        ]);
        
        $this->addForeignKey(
              'user-activity',
              'activity',
              'idAuthor',
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
