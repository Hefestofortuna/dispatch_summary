<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StationSubdivision;

/**
 * StationSubdivisionSearch represents the model behind the search form of `backend\models\StationSubdivision`.
 */
class StationSubdivisionSearch extends StationSubdivision
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'subdivision_id'], 'integer'],
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
        $query = StationSubdivision::find();

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
            'station_id' => $this->station_id,
            'subdivision_id' => $this->subdivision_id,
        ]);

        return $dataProvider;
    }
}
