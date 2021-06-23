<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Station;

/**
 * StationSearch represents the model behind the search form of `backend\models\Station`.
 */
class StationSearch extends Station
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'subdivision_id', 'dga_id', 'organization_id'], 'integer'],
            [['title'], 'safe'],
            [['stType'], 'boolean'],
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
        $query = Station::find();

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
            'subdivision_id' => $this->subdivision_id,
            'dga_id' => $this->dga_id,
            'stType' => $this->stType,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'title', $this->title]);

        return $dataProvider;
    }
}
