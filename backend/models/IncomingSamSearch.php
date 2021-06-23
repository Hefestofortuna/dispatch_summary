<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\IncomingSam;

/**
 * IncomingSamSearch represents the model behind the search form of `backend\models\IncomingSam`.
 */
class IncomingSamSearch extends IncomingSam
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'docs', 'isp_user_id'], 'integer'],
            [['date', 'description'], 'safe'],
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
        $query = IncomingSam::find();

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
            'docs' => $this->docs,
            'date' => $this->date,
            'isp_user_id' => $this->isp_user_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['ilike', 'description', $this->description]);

        return $dataProvider;
    }
}
