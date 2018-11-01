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
            'id'          => $this->primaryKey(),
            'title'       => $this->string(255)->notNull(),
            'start_day'   => $this->date(11),
            'end_day'     => $this->date(11),
            'user_id'  => $this->integer(11)->notNull(),
            'body'        => $this->string(2000)->notNull(),
            'is_repeated' => $this->boolean(),
            'is_blocker'  => $this->boolean(),
        ]);

        $this->addForeignKey(
            'fk_activity_user',
            'activity',
            'user_id',
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
