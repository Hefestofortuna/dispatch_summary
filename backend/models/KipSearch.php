<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Kip;

/**
 * KipSearch represents the model behind the search form of `backend\models\Kip`.
 */
class KipSearch extends Kip
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'station_id', 'plan', 'user_id', 'count_sent', 'count_install', 'organization_id', 'date_install', 'date_ship', 'subdivision_id'], 'integer'],
            [['putdate', 'description'], 'safe'],
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
        $query = Kip::find();

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
            'station_id' => $this->station_id,
            'plan' => $this->plan,
            'user_id' => $this->user_id,
            'count_sent' => $this->count_sent,
            'count_install' => $this->count_install,
            'organization_id' => $this->organization_id,
            'date_install' => $this->date_install,
            'date_ship' => $this->date_ship,
            'subdivision_id' => $this->subdivision_id,
        ]);

        $query->andFilterWhere(['ilike', 'description', $this->description]);

        return $dataProvider;
    }
}
