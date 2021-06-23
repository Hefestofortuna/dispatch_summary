<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Movement;

/**
 * MovementSearch represents the model behind the search form of `backend\models\Movement`.
 */
class MovementSearch extends Movement
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'subdivision_id', 'user_id', 'status_id', 'organization_id'], 'integer'],
            [['pubdate', 'work1', 'work2'], 'safe'],
            [['duty'], 'boolean'],
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
        $query = Movement::find();

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
            'pubdate' => $this->pubdate,
            'subdivision_id' => $this->subdivision_id,
            'user_id' => $this->user_id,
            'status_id' => $this->status_id,
            'duty' => $this->duty,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'work1', $this->work1])
            ->andFilterWhere(['ilike', 'work2', $this->work2]);

        return $dataProvider;
    }
}
