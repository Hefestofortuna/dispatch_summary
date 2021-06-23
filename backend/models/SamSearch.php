<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Sam;

/**
 * SamSearch represents the model behind the search form of `backend\models\Sam`.
 */
class SamSearch extends Sam
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sam_from_id', 'subdivision_id', 'station_id', 'responsible_user_id', 'user_id', 'sam_category_id', 'level', 'organization_id'], 'integer'],
            [['putdate', 'time_start', 'time_finish', 'reason', 'description', 'title_object', 'putdate_send', 'time_send', 'date_finish', 'putdate_term'], 'safe'],
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
        $query = Sam::find();

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
            'time_start' => $this->time_start,
            'time_finish' => $this->time_finish,
            'sam_from_id' => $this->sam_from_id,
            'subdivision_id' => $this->subdivision_id,
            'station_id' => $this->station_id,
            'responsible_user_id' => $this->responsible_user_id,
            'status' => $this->status,
            'user_id' => $this->user_id,
            'sam_category_id' => $this->sam_category_id,
            'level' => $this->level,
            'putdate_send' => $this->putdate_send,
            'time_send' => $this->time_send,
            'date_finish' => $this->date_finish,
            'organization_id' => $this->organization_id,
            'putdate_term' => $this->putdate_term,
        ]);

        $query->andFilterWhere(['ilike', 'reason', $this->reason])
            ->andFilterWhere(['ilike', 'description', $this->description])
            ->andFilterWhere(['ilike', 'title_object', $this->title_object]);

        return $dataProvider;
    }
}
