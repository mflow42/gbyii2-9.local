<?php

use yii\db\Migration;

/**
 * Handles the creation of table `position`.
 */
class m181025_203022_create_position_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('position', [
            'id'   => $this->primaryKey(),
            'name' => $this->string(80)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('position');
    }
}
