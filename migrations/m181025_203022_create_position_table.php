<?php

use yii\db\Migration;

/**
 * Handles the creation of table `position`.
 */
class m181025_203022_create_position_table extends Migration {
  /**
   * {@inheritdoc}
   */
  public function safeUp() {
    $this->createTable('position', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)
    ]);
    
    $this->addForeignKey(
            'person-position',
            'person',
            'position_id',
            'position',
            'id');
  }
  
  /**
   * {@inheritdoc}
   */
  public function safeDown() {
    $this->dropForeignKey('person-position', 'person');
    $this->dropTable('position');
  }
}
