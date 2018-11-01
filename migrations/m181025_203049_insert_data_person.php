<?php

use yii\db\Migration;

/**
 * Class m181025_203049_insert_date
 */
class m181025_203049_insert_data_person extends Migration {
  /**
   * {@inheritdoc}
   */
  public function safeUp() {
    $this->insert('position', ['name' => 'Дизайнер']);
    $this->insert('position', ['name' => 'Редактор']);
    $this->insert('position', ['name' => 'Программист']);
    $this->insert('person', ['name' => 'Владимир', 'position_id' => 1]);
    $this->insert('person', ['name' => 'Анна', 'position_id' => 2]);
    $this->insert('person', ['name' => 'Ольга', 'position_id' => 2]);
    $this->insert('person', ['name' => 'Иван', 'position_id' => 1]);
  }
  
  /**
   * {@inheritdoc}
   */
  public function safeDown() {
    $this->truncateTable('person');
    $this->truncateTable('position');
  }
  
  /*
  // Use up()/down() to run migration code without a transaction.
  public function up()
  {

  }

  public function down()
  {
      echo "m181025_203049_insert_date cannot be reverted.\n";

      return false;
  }
  */
}
