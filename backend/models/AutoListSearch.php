<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AutoList;

/**
 * AutoListSearch represents the model behind the search form of `backend\models\AutoList`.
 */
class AutoListSearch extends AutoList
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'organization_id', 'auto_id', 'user_id', 'hour', 'mileage'], 'integer'],
            [['putdate'], 'safe'],
            [['consumption_liter', 'kiloton', 'consumption_ton'], 'number'],
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
        $query = AutoList::find();

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
            'organization_id' => $this->organization_id,
            'putdate' => $this->putdate,
            'auto_id' => $this->auto_id,
            'user_id' => $this->user_id,
            'hour' => $this->hour,
            'mileage' => $this->mileage,
            'consumption_liter' => $this->consumption_liter,
            'kiloton' => $this->kiloton,
            'consumption_ton' => $this->consumption_ton,
        ]);

        return $dataProvider;
    }
}
