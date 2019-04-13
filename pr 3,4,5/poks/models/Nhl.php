<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Nhl".
 *
 * @property int $id
 * @property string $match
 * @property int $win
 * @property int $lose
 * @property string $country
 * @property string $state
 */
class Nhl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Nhl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['win', 'lose'], 'integer'],
            [['match', 'country', 'state'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'match' => 'Match',
            'win' => 'Win',
            'lose' => 'Lose',
            'country' => 'Country',
            'state' => 'State',
        ];
    }
}
