<?php

use yii\db\Migration;

/**
 * Class m181101_220607_insert_data_user
 */
class m181101_220607_insert_data_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user',
            [
                'login'      => 'admin',
                'password'   => 'admin',
                'name'       => 'admin admin',
                'email'      => 'admin@admin.ru',
                'created_at' => '1541114177',
                'updated_at' => '1541114177',
                'banned'     => false
            ]);
        $this->insert('user',
            [
                'login'      => 'nikolay',
                'password'   => 'nikolay',
                'name'       => 'Nikolay But',
                'email'      => 'nikolay@nikolay.ru',
                'created_at' => '1541114177',
                'updated_at' => '1541114177',
                'banned'     => false
            ]);
        $this->insert('user',
            [
                'login'      => 'viktor',
                'password'   => 'viktor',
                'name'       => 'Viktor Afanasov',
                'email'      => 'viktor@viktor.ru',
                'created_at' => '1541114177',
                'updated_at' => '1541114177',
                'banned'     => false
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181101_220607_insert_data_user cannot be reverted.\n";

        return false;
    }
    */
}
