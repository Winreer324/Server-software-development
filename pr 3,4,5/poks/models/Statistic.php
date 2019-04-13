<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Statistic".
 *
 * @property int $id
 * @property int $statictic_id
 * @property string $match
 * @property double $rating
 */
class Statistic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Statistic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['statictic_id'], 'integer'],
            [['rating'], 'number'],
            [['match'], 'string', 'max' => 255],
            [['statictic_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nhl::className(), 'targetAttribute' => ['statictic_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'statictic_id' => 'Statictic ID',
            'match' => 'Match',
            'rating' => 'Rating',
        ];
    }
}
