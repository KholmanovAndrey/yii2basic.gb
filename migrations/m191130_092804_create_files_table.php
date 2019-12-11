<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%files}}`.
 */
class m191130_092804_create_files_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%files}}', [
            'id' => $this->primaryKey(),
            'activity_id' => $this->integer(),
            'name' => $this->string(255)->notNull(),
            'url' => $this->string(255)->notNull(),
            'created_at' => $this->timestamp()->defaultExpression("now()"),
            'updated_at' => $this->timestamp()->defaultExpression("now()"),
        ]);

        $this->addForeignKey(
            'files_activity_foreign_key',
            '{{%files}}',
            'activity_id',
            '{{%activity}}',
            'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%files}}');
    }
}
