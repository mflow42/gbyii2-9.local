<?php

use yii\db\Migration;

/**
 * Handles the creation of table `activity`.
 */
class m181101_220760_create_activity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('activity', [
            'id'          => $this->primaryKey(),
            'fk_user_id'  => $this->integer(11)->notNull(),
            'title'       => $this->string(255)->notNull(),
            'description' => $this->string(2000)->notNull(),
            'created_at'  => $this->integer(11),
            'updated_at'  => $this->integer(11),
            'started_at'  => $this->integer(11),
            'ended_at'    => $this->integer(11),
            'is_repeated' => $this->boolean(),
            'is_blocker'  => $this->boolean(),
        ]);

        $this->addForeignKey(
            'fk_activity_user',
            'activity',
            'fk_user_id',
            'user',
            'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_activity_user', 'activity');
        $this->dropTable('activity');
    }
}
