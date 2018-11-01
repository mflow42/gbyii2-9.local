<?php

use yii\db\Migration;

/**
 * Handles the creation of table `person`.
 */
class m181025_203023_create_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('person', [
            'id'             => $this->primaryKey(),
            'name'           => $this->string(50),
            'position_id' => $this->integer(11)
        ]);
        $this->addForeignKey(
            'fk_person_position',
            'person',
            'position_id',
            'position',
            'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_person_position', 'person');
        $this->dropTable('person');
    }
}
