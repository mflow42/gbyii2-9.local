<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bookAuthor`.
 */
class m181026_183031_create_bookAuthor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bookAuthor', [
            'id' => $this->primaryKey(),
            'book_id' =>$this->integer()->notNull(),
            'author_id' =>$this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            'fk_bookAuthor_book',
            'bookAuthor',
            'book_id',
            'book',
            'id'
        );

        $this->addForeignKey(
            'fk_bookAuthor_author',
            'bookAuthor',
            'author_id',
            'author',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_bookAuthor_book', 'bookAuthor');
        $this->dropForeignKey('fk_bookAuthor_author', 'bookAuthor');
        $this->dropTable('bookAuthor');
    }
}
