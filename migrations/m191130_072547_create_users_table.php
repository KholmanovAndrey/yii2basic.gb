<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m191130_072547_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string('255')->notNull(),
            'password' => $this->string('255')->notNull(),
            'authKey' => $this->string('255')->notNull(),
            'accessToken' => $this->string('255')->notNull(),
            'created_at' => $this->timestamp()->defaultExpression("now()"),
            'updated_at' => $this->timestamp()->defaultExpression("now()"),
        ]);

        $this->createIndex('users_username_index', '{{%users}}', 'username');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
