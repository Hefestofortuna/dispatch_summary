<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Fail;

/**
 * FailSearch represents the model behind the search form of `backend\models\Fail`.
 */
class FailSearch extends Fail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'service_id', 'subdivision_id', 'user_id', 'station_id', 'fail_user_id', 'organization_id'], 'integer'],
            [['putdate', 'date_start', 'time_start', 'date_finish', 'time_finish', 'description', 'character'], 'safe'],
            [['system'], 'boolean'],
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
        $query = Fail::find();

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
            'date_start' => $this->date_start,
            'time_start' => $this->time_start,
            'date_finish' => $this->date_finish,
            'time_finish' => $this->time_finish,
            'service_id' => $this->service_id,
            'subdivision_id' => $this->subdivision_id,
            'user_id' => $this->user_id,
            'station_id' => $this->station_id,
            'fail_user_id' => $this->fail_user_id,
            'organization_id' => $this->organization_id,
            'system' => $this->system,
        ]);

        $query->andFilterWhere(['ilike', 'description', $this->description])
            ->andFilterWhere(['ilike', 'character', $this->character]);

        return $dataProvider;
    }
}
