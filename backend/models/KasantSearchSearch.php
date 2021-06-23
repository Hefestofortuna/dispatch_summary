<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KasantSearch;

/**
 * KasantSearchSearch represents the model behind the search form of `backend\models\KasantSearch`.
 */
class KasantSearchSearch extends KasantSearch
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'count', 'user_id', 'organization_id'], 'integer'],
            [['putdate', 'place', 'cause', 'time_start', 'time_finish', 'time_total', 'service', 'resolution', 'time_delay'], 'safe'],
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
        $query = KasantSearch::find();

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
            'putdate' => $this->putdate,
            'time_start' => $this->time_start,
            'time_finish' => $this->time_finish,
            'time_total' => $this->time_total,
            'count' => $this->count,
            'time_delay' => $this->time_delay,
            'user_id' => $this->user_id,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'place', $this->place])
            ->andFilterWhere(['ilike', 'cause', $this->cause])
            ->andFilterWhere(['ilike', 'service', $this->service])
            ->andFilterWhere(['ilike', 'resolution', $this->resolution]);

        return $dataProvider;
    }
}
