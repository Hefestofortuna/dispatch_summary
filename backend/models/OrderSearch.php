<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Order;

/**
 * OrderSearch represents the model behind the search form of `backend\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'num_off', 'station_id', 'card_id', 'shns_off_user_id', 'shchd_off_user_id', 'apply_shch_user_id', 'shns_on_user_id', 'shchd_on_user_id', 'num_on', 'organization_id'], 'integer'],
            [['description_off', 'date_off', 'time_off', 'apply_ds', 'date_on', 'time_on', 'description_on', 'date'], 'safe'],
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
        $query = Order::find();

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
            'num_off' => $this->num_off,
            'station_id' => $this->station_id,
            'card_id' => $this->card_id,
            'date_off' => $this->date_off,
            'time_off' => $this->time_off,
            'shns_off_user_id' => $this->shns_off_user_id,
            'shchd_off_user_id' => $this->shchd_off_user_id,
            'apply_shch_user_id' => $this->apply_shch_user_id,
            'date_on' => $this->date_on,
            'time_on' => $this->time_on,
            'shns_on_user_id' => $this->shns_on_user_id,
            'shchd_on_user_id' => $this->shchd_on_user_id,
            'num_on' => $this->num_on,
            'date' => $this->date,
            'organization_id' => $this->organization_id,
        ]);

        $query->andFilterWhere(['ilike', 'description_off', $this->description_off])
            ->andFilterWhere(['ilike', 'apply_ds', $this->apply_ds])
            ->andFilterWhere(['ilike', 'description_on', $this->description_on]);

        return $dataProvider;
    }
}
