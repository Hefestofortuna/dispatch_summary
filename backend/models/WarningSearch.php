<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Warning;

/**
 * WarningSearch represents the model behind the search form of `backend\models\Warning`.
 */
class WarningSearch extends Warning
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'station_id', 'user_id', 'arm_user_id', 'organization_id'], 'integer'],
            [['place', 'description', 'date_work', 'time_from', 'time_to', 'date_arm', 'time_arm', 'pub_date', 'number'], 'safe'],
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
        $query = Warning::find();

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
            'date_work' => $this->date_work,
            'time_from' => $this->time_from,
            'time_to' => $this->time_to,
            'date_arm' => $this->date_arm,
            'user_id' => $this->user_id,
            'time_arm' => $this->time_arm,
            'arm_user_id' => $this->arm_user_id,
            'organization_id' => $this->organization_id,
            'pub_date' => $this->pub_date,
        ]);

        $query->andFilterWhere(['ilike', 'place', $this->place])
            ->andFilterWhere(['ilike', 'description', $this->description])
            ->andFilterWhere(['ilike', 'number', $this->number]);

        return $dataProvider;
    }
}
