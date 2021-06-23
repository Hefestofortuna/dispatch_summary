<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OperRasp;

/**
 * OperRaspSearch represents the model behind the search form of `backend\models\OperRasp`.
 */
class OperRaspSearch extends OperRasp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'organization_id'], 'integer'],
            [['title', 'date_create', 'file', 'date_finish', 'short_name'], 'safe'],
            [['status'], 'boolean'],
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
        $query = OperRasp::find();

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
            'date_create' => $this->date_create,
            'date_finish' => $this->date_finish,
            'status' => $this->status,
            'user_id' => $this->user_id,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'title', $this->title])
            ->andFilterWhere(['ilike', 'file', $this->file])
            ->andFilterWhere(['ilike', 'short_name', $this->short_name]);

        return $dataProvider;
    }
}
