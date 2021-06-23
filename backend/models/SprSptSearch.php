<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SprSpt;

/**
 * SprSptSearch represents the model behind the search form of `backend\models\SprSpt`.
 */
class SprSptSearch extends SprSpt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'station_id', 'spr_spt_system_id', 'spr_spt_type_id', 'spr_balance_id', 'spr_class_id'], 'integer'],
            [['object'], 'safe'],
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
        $query = SprSpt::find();

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
            'station_id' => $this->station_id,
            'spr_spt_system_id' => $this->spr_spt_system_id,
            'spr_spt_type_id' => $this->spr_spt_type_id,
            'spr_balance_id' => $this->spr_balance_id,
            'spr_class_id' => $this->spr_class_id,
        ]);

        $query->andFilterWhere(['ilike', 'object', $this->object]);

        return $dataProvider;
    }
}
