<?php

use yii\db\Migration;

/**
 * Class m191130_082532_create_activity_foreign_key
 */
class m191130_082532_create_activity_foreign_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'activity_user_foreign_key',
            '{{%activity}}',
            'user_id',
            '{{%users}}',
            'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('activity_user_foreign_key', '{{%activity}}');
    }
}
