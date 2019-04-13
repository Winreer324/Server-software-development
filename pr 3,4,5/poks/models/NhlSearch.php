<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nhl;

/**
 * NhlSearch represents the model behind the search form of `app\models\Nhl`.
 */
class NhlSearch extends Nhl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'win', 'lose'], 'integer'],
            [['match', 'country', 'state'], 'safe'],
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
        $query = Nhl::find();

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
            'win' => $this->win,
            'lose' => $this->lose,
        ]);

        $query->andFilterWhere(['like', 'match', $this->match])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'state', $this->state]);

        return $dataProvider;
    }
}
