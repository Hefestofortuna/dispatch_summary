<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OperRaspIsp;

/**
 * OperRaspIspSearch represents the model behind the search form of `backend\models\OperRaspIsp`.
 */
class OperRaspIspSearch extends OperRaspIsp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'oper_rasp_sam_id', 'isp_user_id', 'oper_rasp_id', 'percent', 'agreed_user_id'], 'integer'],
            [['description', 'date_finish'], 'safe'],
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
        $query = OperRaspIsp::find();

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
            'oper_rasp_sam_id' => $this->oper_rasp_sam_id,
            'isp_user_id' => $this->isp_user_id,
            'date_finish' => $this->date_finish,
            'status' => $this->status,
            'oper_rasp_id' => $this->oper_rasp_id,
            'percent' => $this->percent,
            'agreed_user_id' => $this->agreed_user_id,
        ]);

        $query->andFilterWhere(['ilike', 'description', $this->description]);

        return $dataProvider;
    }
}
