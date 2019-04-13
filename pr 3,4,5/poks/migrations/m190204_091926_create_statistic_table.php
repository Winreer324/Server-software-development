<?php

use yii\db\Migration;

/**
 * Handles the creation of table `statistic`.
 * Has foreign keys to the tables:
 *
 * - `nhl`
 */
class m190204_091926_create_statistic_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('statistic', [
            'id' => $this->primaryKey(),
            'statictic_id' => $this->integer(),
            'match' => $this->string(),
            'rating' => $this->float(),
        ]);

        // creates index for column `statictic_id`
        $this->createIndex(
            'idx-statistic-statictic_id',
            'statistic',
            'statictic_id'
        );

        // add foreign key for table `nhl`
        $this->addForeignKey(
            'fk-statistic-statictic_id',
            'statistic',
            'statictic_id',
            'nhl',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `nhl`
        $this->dropForeignKey(
            'fk-statistic-statictic_id',
            'statistic'
        );

        // drops index for column `statictic_id`
        $this->dropIndex(
            'idx-statistic-statictic_id',
            'statistic'
        );

        $this->dropTable('statistic');
    }
}
