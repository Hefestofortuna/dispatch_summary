<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Plan;

/**
 * PlanSearch represents the model behind the search form of `backend\models\Plan`.
 */
class PlanSearch extends Plan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'organization_id', 'work_plan'], 'integer'],
            [['putdate', 'work', 'station', 'subdivision', 'expired'], 'safe'],
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
        $query = Plan::find();

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
            'organization_id' => $this->organization_id,
            'work_plan' => $this->work_plan,
        ]);

        $query->andFilterWhere(['ilike', 'work', $this->work])
            ->andFilterWhere(['ilike', 'station', $this->station])
            ->andFilterWhere(['ilike', 'subdivision', $this->subdivision])
            ->andFilterWhere(['ilike', 'expired', $this->expired]);

        return $dataProvider;
    }
}
