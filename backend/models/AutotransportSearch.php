<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Autotransport;

/**
 * AutotransportSearch represents the model behind the search form of `backend\models\Autotransport`.
 */
class AutotransportSearch extends Autotransport
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'subdivision_id', 'contact_user_id', 'user_id', 'auto_id', 'driver_user_id', 'odometr', 'organization_id'], 'integer'],
            [['date', 'target', 'time_arrival', 'time_departure'], 'safe'],
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
        $query = Autotransport::find();

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
            'date' => $this->date,
            'subdivision_id' => $this->subdivision_id,
            'contact_user_id' => $this->contact_user_id,
            'user_id' => $this->user_id,
            'auto_id' => $this->auto_id,
            'driver_user_id' => $this->driver_user_id,
            'time_arrival' => $this->time_arrival,
            'time_departure' => $this->time_departure,
            'odometr' => $this->odometr,
            'status' => $this->status,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'target', $this->target]);

        return $dataProvider;
    }
}
