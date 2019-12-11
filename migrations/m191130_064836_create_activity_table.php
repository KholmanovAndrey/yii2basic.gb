<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%activity}}`.
 */
class m191130_064836_create_activity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%activity}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'name' => $this->string(255)->notNull(),
            'started_at' => $this->timestamp()->defaultExpression("now()"),
            'finished_at' => $this->timestamp()->defaultExpression("now()"),
            'created_at' => $this->timestamp()->defaultExpression("now()"),
            'updated_at' => $this->timestamp()->defaultExpression("now()"),
            'content' => $this->text(),
            'cycle' => $this->boolean()->defaultValue(false),
            'main' => $this->boolean()->defaultValue(false),
        ]);

        $this->createIndex('activity_user_index', '{{%activity}}', 'user_id');
        $this->createIndex('activity_at_index', '{{%activity}}', ['created_at', 'started_at']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%activity}}');
    }
}
