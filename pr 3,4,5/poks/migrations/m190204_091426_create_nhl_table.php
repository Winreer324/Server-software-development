<?php

use yii\db\Migration;

/**
 * Handles the creation of table `nhl`.
 */
class m190204_091426_create_nhl_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('nhl', [
            'id' => $this->primaryKey(),
            'match' => $this->string(),
            'win' => $this->integer(),
            'lose' => $this->integer(),
            'country' => $this->string(), 
            'state' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('nhl');
    }
}
