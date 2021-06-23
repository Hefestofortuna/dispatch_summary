<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Ors;

/**
 * OrsSearch represents the model behind the search form of `backend\models\Ors`.
 */
class OrsSearch extends Ors
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'station_id', 'sum_main_pch', 'sum_main_shch', 'sum_main', 'sum_minor_pch', 'sum_minor_shch', 'sum_minor', 'subdivision_id'], 'integer'],
            [['putdate', 'description'], 'safe'],
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
        $query = Ors::find();

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
            'sum_main_pch' => $this->sum_main_pch,
            'sum_main_shch' => $this->sum_main_shch,
            'sum_main' => $this->sum_main,
            'putdate' => $this->putdate,
            'sum_minor_pch' => $this->sum_minor_pch,
            'sum_minor_shch' => $this->sum_minor_shch,
            'sum_minor' => $this->sum_minor,
            'subdivision_id' => $this->subdivision_id,
        ]);

        $query->andFilterWhere(['ilike', 'description', $this->description]);

        return $dataProvider;
    }
}
