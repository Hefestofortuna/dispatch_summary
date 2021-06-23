<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Otkl;

/**
 * OtklSearch represents the model behind the search form of `backend\models\Otkl`.
 */
class OtklSearch extends Otkl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'station_id', 'transfer_user_id', 'user_id', 'organization_id'], 'integer'],
            [['putdate', 'time_from', 'time_to', 'description', 'object'], 'safe'],
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
        $query = Otkl::find();

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
            'time_from' => $this->time_from,
            'time_to' => $this->time_to,
            'station_id' => $this->station_id,
            'transfer_user_id' => $this->transfer_user_id,
            'user_id' => $this->user_id,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'description', $this->description])
            ->andFilterWhere(['ilike', 'object', $this->object]);

        return $dataProvider;
    }
}
