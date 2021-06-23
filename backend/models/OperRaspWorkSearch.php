<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OperRaspWork;

/**
 * OperRaspWorkSearch represents the model behind the search form of `backend\models\OperRaspWork`.
 */
class OperRaspWorkSearch extends OperRaspWork
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'oper_rasp_id', 'oper_rasp_isp_id'], 'integer'],
            [['comment', 'work', 'date_term', 'date_finish'], 'safe'],
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
        $query = OperRaspWork::find();

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
            'oper_rasp_id' => $this->oper_rasp_id,
            'oper_rasp_isp_id' => $this->oper_rasp_isp_id,
            'date_term' => $this->date_term,
            'date_finish' => $this->date_finish,
        ]);

        $query->andFilterWhere(['ilike', 'comment', $this->comment])
            ->andFilterWhere(['ilike', 'work', $this->work]);

        return $dataProvider;
    }
}
