<?php

use yii\db\Migration;

/**
 * Class m230509_083908_create_table_article
 */
class m230509_083908_create_table_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('article', [
           'id' => $this->primaryKey(),
           'title' => $this->string()->notNull(),
           'code' => $this->string()->notNull(),
           'content' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('article');
    }
}
