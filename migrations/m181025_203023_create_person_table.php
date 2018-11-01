<?php

use yii\db\Migration;

/**
 * Handles the creation of table `person`.
 */
class m181025_202928_create_person_table extends Migration {
  /**
   * {@inheritdoc}
   */
  public function safeUp() {
    $this->createTable('person', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'position_id' => $this->integer()
    ]);
  }
  
  /**
   * {@inheritdoc}
   */
  public function safeDown() {
    $this->dropTable('person');
  }
}
