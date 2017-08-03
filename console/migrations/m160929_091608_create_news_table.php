<?php

use yii\db\Migration;

/**
 * Handles the creation for table `news`.
 */
class m160929_091608_create_news_table extends Migration {

    /**
     * @inheritdoc
     */
    public function up() {
        $this->createTable('test', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string(),
            'email' => $this->string()->notNull(),
            'role' => $this->string()->notNull(),
            'status' => $this->string(10)->notNull(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->dropTable('news');
    }

}
