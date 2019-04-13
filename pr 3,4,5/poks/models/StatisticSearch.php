<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Statistic;

/**
 * StatisticSearch represents the model behind the search form of `app\models\Statistic`.
 */
class StatisticSearch extends Statistic
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'statictic_id'], 'integer'],
            [['match'], 'safe'],
            [['rating'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Statistic::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'statictic_id' => $this->statictic_id,
            'rating' => $this->rating,
        ]);

        $query->andFilterWhere(['like', 'match', $this->match]);

        return $dataProvider;
    }
}
